<template>
<div class="row justify-content-center">
    <form class="col-md-6 my-5 p-5 border border-secondary border-2 rounded-end" @submit.prevent="changeColors">
        <h3>Cores do sistema</h3>
        <div class="my-3">
            <label for="primary_color" class="form-label">Cor primária</label>
            <input type="color" id="primary_color" class="form-control form-control-color" title="Escolha a cor primária do sistema" v-model="formColor.primary_color">
        </div>
        <div class="my-3">
            <label for="secondary_color" class="form-label">Cor secundária</label>
            <input type="color" id="secondary_color" class="form-control form-control-color" title="Escolha a cor secundária do sistema" v-model="formColor.secondary_color">
        </div>
        <button type="submit" class="btn btn-primary float-right">Alterar</button>
    </form>
</div>
</template>

<script setup>
import { onMounted, reactive, watch } from 'vue';
import { useColorStore } from '@/libs/store/color';
import api from '@/libs/axios/index';

const color = useColorStore();

const formColor = reactive({
    primary_color: '#000000',
    secondary_color: '#ffffff',
})

function changeColors() {
    api.post('/api/set-color', {
        primary_color: formColor.primary_color,
        secondary_color: formColor.secondary_color
    }).then( ({ data }) => {
        color.setColors(data.primaryColor, data.secondaryColor);
        console.log('res:', data);
    })
    .catch(erro => {
        console.log('Erro ao mudar cor:', erro.response?.data || erro.message);
    });
}

watch(
    () => [color.primary_color, color.secondary_color], ([primary, secondary]) => {
        if(primary) formColor.primary_color = primary;
        if(secondary) formColor.secondary_color = secondary;
    },
    { immediate: true }
);

onMounted(() => {
    formColor.primary_color = color.primaryColor;
    formColor.secondary_color = color.secondaryColor;
});
</script>

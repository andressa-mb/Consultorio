<template>
    <div class="row">
        <div class="col-12">
            <h3>COMPONENTE PAGE / </h3>
            <p>Página de início de exemplo</p>
        </div>
    </div>
</template>

<script setup>
import { onMounted } from 'vue';

onMounted(() => {
    console.log('entrou em page, principal, sem axios');
});
</script>

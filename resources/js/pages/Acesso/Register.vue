<template>
<div class="row justify-content-center">
    <form class="col-md-6">
        <div class="mt-5">
            <h3>Novo cadastro</h3>
        </div>
        <div class="my-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" v-model="form.email">
            <div id="emailHelp" class="form-text">Não compartilhe com ninguém.</div>
        </div>
        <div class="my-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" v-model="form.password">
        </div>
        <div class="my-3">
            <label for="password_confirmation" class="form-label">Confirmar Senha</label>
            <input type="password" class="form-control" id="password_confirmation" v-model="form.password_confirmation">
        </div>
        <div class="form-check my-3">
            <input type="checkbox" class="form-check-input" id="isEmployee" v-model="form.employee">
            <label class="form-check-label" for="isEmployee">Funcionário?</label>
        </div>
        <button type="submit" class="btn btn-primary" @click.prevent="sendData()">Enviar</button>
    </form>
</div>

<div class="row justify-content-center">
    <ModalMessage v-if="openModalMsg" :title="titleModal" :text="textModal" @fechar="fecharModalMsg"/>
</div>

<div class="row">
    <div class="col-md-6">
        {{ form.employee }} <br>
        {{ form.email }} <br>
        {{ form.password }} <br>
        {{ form.password_confirmation }} <br>
    </div>
</div>
</template>

<script setup>
import { ref, reactive } from 'vue';
import { useRouter } from 'vue-router';
import { useAuthStore } from '@/libs/store/auth';
import api from '@/libs/axios/index';
import ModalMessage from '@/components/modal/Message.vue';

const router = useRouter();
const auth = useAuthStore();
const openModalMsg = ref(false);
const textModal = ref('');
const titleModal = ref('');

let form = reactive({
    employee: false,
    email: '',
    password: '',
    password_confirmation: '',
})

const fecharModalMsg = () => {
    openModalMsg.value = false;
    router.push('/login-sys');
}

async function sendData() {
    await api.post('/register', {
        employee: form.employee,
        email: form.email,
        password: form.password,
        password_confirmation: form.password_confirmation,
    })
    .then(({data}) => {
        textModal.value = `${data.message}`
        titleModal.value = "Cadastrado";
        openModalMsg.value = true;
        console.log('cadastrado', data);
    }).catch((error) => {
        if (error.response?.status === 422) {
            const errors = error.response.data.errors;
            textModal.value = Object.values(errors)[0][0];
        } else {
            textModal.value = "Erro inesperado no servidor.";
        }

        titleModal.value = "ERRO";
        openModalMsg.value = true;
        console.log('erro ao cadastrar', error);
    })
}
</script>

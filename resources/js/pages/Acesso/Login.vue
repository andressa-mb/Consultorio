<template>
<div class="row justify-content-center">
    <form class="col-md-6" @submit.prevent="login">
        <div class="mt-5">
            <h3>Acesso</h3>
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
            <button type="submit" class="btn btn-primary">Acessar</button>
        </div>

        <br><br>
        <div class="m-3">
            email: {{ form.email }}<br>
            senha: {{ form.password }}<br>
        </div>
    </form>
</div>

<div class="row justify-content-center">
    <ModalMessage v-if="openModalMsg" :title="titleModal" :text="textModal" @fechar="fecharModalMsg"/>
</div>
</template>

<script setup>
import { onMounted, reactive, ref } from 'vue';
import { useRouter } from 'vue-router'
import { useAuthStore } from '@/libs/store/auth';
import api from '@/libs/axios/index';
import ModalMessage from '@/components/modal/Message.vue';

const router = useRouter();
const openModalMsg = ref(false);
const textModal = ref('');
const titleModal = ref('');
const logado = ref(false);
const auth = useAuthStore();

const fecharModalMsg = () => {
    openModalMsg.value = false;
    accessUser();
}

const form = reactive({
    email: '',
    password: '',
});

function accessUser() {
    if(logado.value){
        router.push({name: 'page'});
    }
}

const login = async () => {
    api.post('/login', {
        email: form.email,
        password: form.password
    })
    .then(({data}) => {
        logado.value = true;
        titleModal.value = 'Login';
        textModal.value = data.message;
        openModalMsg.value = true;
        auth.login(data.user);
    })
    .catch((error) => {
        titleModal.value = 'Erro';
        textModal.value = `Erro ao logar usuário. ${error.request.statusText} - ${error.request.status}` ;
        logado.value = false;
        openModalMsg.value = true;
    });
}

onMounted(() => {
    console.log('chegou no mount do login');
})
</script>


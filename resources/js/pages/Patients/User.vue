<template>
<div class="row">
    <div class="row align-items-md-around" v-if="client">
        <h3>Perfil</h3>
        <div class="col-md m-2">
            <div class="h-100 p-5 text-dark bg-light rounded-3 row">
                <div class="col-md-6">
                    <p>{{ client.id }} - {{ client.email }}</p>
                    <p>{{ client.employee ? 'Funcionário' : 'Cliente' }} - {{ client.created_at }}</p>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <h1><i class="bi bi-person-vcard"></i></h1>
                </div>

                <div class="col">
                    <router-link v-if="!person" :to="{name: 'form-person', params: {userId: client.id }}" class="btn btn-outline-dark me-2">Completar cadastro</router-link>
                    <router-link :to="{ name: 'form-user', params: { isEmployee: client.employee, userId: client.id }}" class="btn btn-outline-dark me-2">
                        Editar
                    </router-link>
                    <button class="btn btn-outline-dark" type="button">
                        Add dependente
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script setup>
import { onBeforeMount, ref } from 'vue';
import { useAuthStore } from '@/libs/store/auth';
import api from '@/libs/axios/index';
import { useRouter } from 'vue-router'

//const router = useRouter();
const auth = useAuthStore();
const client = ref('');
const person = ref('');

async function getUser(url = `/api/user/${auth.loggedUser.id}`) {
    await api.get(url)
    .then( ({data}) => {
        console.log('response user', data)
        client.value = data.user;
        person.value = data.person;
    })
    .catch((e) => {
        console.log('Erro user: ', e);
    })
}

onBeforeMount(async () => {
    if(auth.isAuth){
        getUser();
    }
});

</script>

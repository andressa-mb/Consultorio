<template>
<div class="row">

    <div v-if="auth.isAuth && auth.user?.employee" class="col-md-12 d-flex justify-content-end">
        <button class="btn btn-primary" type="button" @click.prevent="registerUser">
            Criar usuário
        </button>
    </div>

    <div class="row align-items-md-around" v-if="clients && auth.isAuth && auth.user?.employee">
        <h3>Clientes</h3>
        <div class="col-md m-2" v-for="client in clients.data" :key="client.id">
            <div class="h-100 p-5 text-dark bg-light rounded-3 row">
                <div class="col-md-6">
                    <p>{{ client.id }} - {{ client.email }}</p>
                    <p>{{ client.employee ? 'Funcionário' : 'Cliente' }} - {{ client.created_at }}</p>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                        <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
                        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
                    </svg>
                </div>

            <!--<div class="col">
                    <router-link :to="{ name: 'form-data-user', params: { isEmployee: client.employee, userId: client.id }}" class="btn btn-outline-dark me-2">
                        Editar Router
                    </router-link>
                    <button class="btn btn-outline-dark" type="button">
                        Add dependente
                    </button>
                </div> -->
            </div>
        </div>

        <div v-if="clients.links" class="d-flex">
            <div v-for="(link, index) in clients.links" :key="index" class="">
                <button @click.prevent="link.url && getClients(link.url)"
                    class="btn btn-sm btn-outline-secondary m-2">
                    <span v-if="link.active" class="fw-bold">{{ link.page }}</span>
                    <span v-if="!link.active" class="">{{ link.page }}</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row align-items-md-around" v-if="employees">
        <h3>Funcionários</h3>
        <div class="col-md m-2" v-for="employee in employees.data" :key="employee.id">
            <div class="h-100 p-5 text-dark bg-light rounded-3 row">
                <div class="col-md-6">
                    <p>{{ employee.id }} - {{ employee.email }}</p>
                    <p>{{ employee.employee ? 'Funcionário' : 'Cliente' }} - {{ employee.created_at }}</p>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                        <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                        <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
                    </svg>
                </div>

            <!--<div class="col">
                    <router-link :to="{ name: 'form-data-user', params: { isEmployee: employee.employee, userId: employee.id }}" class="btn btn-outline-dark me-2">
                        Editar Router
                    </router-link>
                </div> -->
            </div>
        </div>

        <div v-if="employees.links" class="d-flex">
            <div v-for="(link, index) in employees.links" :key="index" class="">
                <button @click.prevent="link.url && getEmployees(link.url)"
                    class="btn btn-sm btn-outline-secondary m-2">
                    <span v-if="link.active" class="fw-bold">{{ link.page }}</span>
                    <span v-if="!link.active" class="">{{ link.page }}</span>
                </button>
            </div>
        </div>
    </div>
</div>
</template>

<script setup>
import { onBeforeMount, ref } from 'vue';
import { useAuthStore } from '@/libs/store/auth';
import { useRouter } from 'vue-router'
import api from '@/libs/axios/index';

const router = useRouter();
const auth = useAuthStore();
const clients = ref(null);
const employees = ref(null);

const registerUser = () => {
    router.push('/register');
}

async function getEmployees(url = '/api/listEmployees') {
    console.log(url)
    await api.get(url)
    .then( ({data}) => {
        console.log('response funcionarios', data)
        employees.value = data.employees;
    })
    .catch((e) => {
        console.log('Erro funcionarios: ', e);
    })
}

async function getClients(url = '/api/listUsers') {
    await api.get(url)
    .then( ({data}) => {
        console.log('response funcionarios', data)
        clients.value = data.users;
    })
    .catch((e) => {
        console.log('Erro funcionarios: ', e);
    })
}

onBeforeMount(async () => {
    if(auth.isAuth){
        getEmployees();
        getClients();
    }
});

</script>

<template>
<div class="container-fluid">
    <div class="row">
        <header class="col-md-12">
            <Navbar></Navbar>
        </header>

        <main class="col-md-12">
            <h2 class="text-center m-2">Consultório</h2>
            Usuário logado: <br> {{ auth.loggedUser }} <hr>
            <router-view />
        </main>

        <footer class="col-md-12" >
            <div class="row">
                <p class="col-md-12 text-center mt-5">Copyright Consultorio © 2026 by Andressa.</p>
            </div>
        </footer>
    </div>
</div>
</template>

<script setup>
import Navbar from '@/components/Navbar.vue';
import { useAuthStore } from '@/libs/store/auth.js';
import { onMounted, watch } from 'vue';
import api from '@/libs/axios/index.js';

const auth = useAuthStore();

watch(() => auth.isAuth, () => {
    getUser();
});

async function getUser() {
    await api.get('me').then(({data}) => {
        auth.login(data);
    }).catch(() => {
        console.log('não tem usuario logado')
    })
}

onMounted(() => {
    getUser();
});

</script>


<template>
    <div class="row">
        <div class="col-12">
            <h3>COMPONENTE INDEX / para usuários NÃO logados </h3>
            <p>Página para DESLOGADOS</p>
        </div>

        <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">Ações</h2>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch justify-content-center g-4 py-5">
                <div class="col">
                    <router-link to="/login-sys" class="text-decoration-none">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Login</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <i class="bi bi-door-open"></i>
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <i class="bi bi-1-circle"></i>
                                        <small>Acesso Usuários</small>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-2-circle"></i>
                                        <small>Acesso Consultas</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </router-link>
                </div>

                <div class="col">
                    <router-link to="/register" class="text-decoration-none">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Registro</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <i class="bi bi-person-plus"></i>
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <i class="bi bi-1-circle"></i>
                                        <small>Acesso ao sistema</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </router-link>
                </div>
            </div>
        </div>
    </div>

</template>

<script setup>
import { onMounted } from 'vue';

onMounted(() => {
    console.log('entrou no index public, sem axios');
});
</script>

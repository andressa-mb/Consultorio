<template>
<div class="row">
    <ul class="col-md-12 nav nav-tabs d-flex justify-content-end p-0">

        <li class="nav-item">
            <router-link to="/" class="nav-link">Início</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/others" class="nav-link" :style="{'color': color.primaryColor}">Outros</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/users" class="nav-link">Usuários</router-link>
        </li>
        <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle"
               data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                Acesso
            </a>

            <ul class="dropdown-menu" >
                <li>
                    <router-link to="/login-sys" class="dropdown-item pl-2">Login</router-link>
                </li>
                <li>
                    <router-link to="/register" class="dropdown-item pl-2">Registro</router-link>
                </li>
                <li>
                    <router-link to="/config" class="dropdown-item pl-2" >Configs</router-link>
                </li>
                <li>
                    <router-link to="/" class="dropdown-item pl-2">Logout</router-link>
                </li>
            </ul>
        </li>
    </ul>

</div>

</template>

<script setup>


</script>

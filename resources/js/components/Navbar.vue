<template>
<div class="row">
    <ul class="col-md-12 nav nav-tabs d-flex justify-content-end p-0" :style="{'background-color': color.primaryColor, 'color': color.secondaryColor}">
        <li class="nav-item form-check form-switch m-2">
            <input class="form-check-input" type="checkbox" role="switch" id="theme" v-on:change="colorTheme">
            <label class="form-check-label" for="theme">
                <i class="bi bi-brilliance"></i>
            </label>
        </li>
        <li class="nav-item" :style="{'background-color': color.secondaryColor}">
            <router-link to="/" class="nav-link" :style="{'color': color.primaryColor}">
                {{ auth.isAuth ? "Home" : "Início"}}
            </router-link>
        </li>
        <li v-if="auth.isAuth && auth.user?.employee" class="nav-item" :style="{'background-color': color.secondaryColor}">
            <router-link to="/users" class="nav-link" :style="{'color': color.primaryColor}">
                Usuários
            </router-link>
        </li>

        <li class="nav-item dropdown" :style="{'background-color': color.secondaryColor}">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" :style="{'color': color.primaryColor}">
                Acesso
            </a>
            <ul class="dropdown-menu" :style="{'background-color': color.secondaryColor}">
                <li v-if="!auth.isAuth">
                    <router-link to="/login-sys" class="dropdown-item pl-2" :style="{'color': color.primaryColor}">
                        Login
                    </router-link>
                </li>
                <li v-if="!auth.isAuth">
                    <router-link to="/register" class="dropdown-item pl-2" :style="{'color': color.primaryColor}">
                        Registro
                    </router-link>
                </li>
                <li v-if="auth.isAuth">
                    <router-link to="/config" class="dropdown-item pl-2" :style="{'color': color.primaryColor}">
                        Configs
                    </router-link>
                </li>
                <li v-if="auth.isAuth">
                    <router-link to="/" class="dropdown-item pl-2" :style="{'color': color.primaryColor}" @click.prevent="logout">
                        Logout
                    </router-link>
                </li>
            </ul>
        </li>
    </ul>
</div>
</template>

<script setup>
import { useAuthStore } from '@/libs/store/auth';
import { useColorStore } from '@/libs/store/color';
import api from '@/libs/axios/index';

const auth = useAuthStore();
const color = useColorStore();

function colorTheme(event) {
    const isDark = event.target.checked ? 'dark' : 'light';
    if(isDark) {
        color.setColors(color.secondaryColor, color.primaryColor);
    }else {
        color.setColors(color.primaryColor, color.secondaryColor);
    }
}

function reset() {
    api.get('api/app-colors')
    .then( ({ data }) => {
        color.setColors(data.primaryColor, data.secondaryColor);
    })
    .catch((error) => console.log('error', error));
}

function logout() {
    api.post('/logout')
      .then(() => {
        reset();
        auth.logout();
    });
}
</script>

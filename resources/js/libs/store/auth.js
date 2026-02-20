import { defineStore } from 'pinia';

export const useAuthStore = defineStore('auth', {
    state: () => ({
        isAuth: false,
        user: null,
    }),
    getters: {
        authCheck: (state) => state.isAuth,
        loggedUser: (state) => state.user
    },
    actions: {
        login(user) {
            this.user = user;
            this.isAuth = true;
        },
        logout() {
            this.user = null;
            this.isAuth = false;
        },
    }
});

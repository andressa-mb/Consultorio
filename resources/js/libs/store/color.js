import { defineStore } from 'pinia';

export const useColorStore = defineStore('colors', {
    state: () => ({
        primary: '#0080ff',
        secondary: '#ffff80'
    }),
    getters: {
        primaryColor: (state) => state.primary,
        secondaryColor: (state) => state.secondary,
        colors: (state) => ({
            primary: state.primary,
            secondary: state.secondary
        })
    },
    actions: {
        setColors(primary, secondary) {
            this.primary = primary;
            this.secondary = secondary;
        },
        defaultColors() {
            this.primary = '0080ff',
            this.secondary = '#ffff80'
        }
    },
});

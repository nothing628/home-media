import "./bootstrap";
import { createApp } from "vue";
import { createPinia } from "pinia";
import { createRouter, createWebHashHistory } from "vue-router";
import MainApp from './MainApp.vue';
import ComponentPlugin from "./components";

const vueApp = createApp(MainApp);
const store = createPinia();
const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        {
            path: '/',
            component: () => import('./pages/HomePage.vue')
        }
    ],
});

vueApp.use(ComponentPlugin);
vueApp.use(store);
vueApp.use(router);
vueApp.mount("#app");

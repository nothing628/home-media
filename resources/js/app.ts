require("./bootstrap");
import { createApp } from "vue";
import { createPinia } from "pinia";
import { createRouter, createWebHashHistory } from "vue-router";
import ComponentPlugin from "./components";

const vueApp = createApp({});
const store = createPinia();
const router = createRouter({
    history: createWebHashHistory(),
    routes: [],
});

vueApp.use(ComponentPlugin);
vueApp.use(store);
vueApp.use(router);
vueApp.mount("#app");

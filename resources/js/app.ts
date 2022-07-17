require("./bootstrap");
import { createApp } from "vue";
import { createPinia } from "pinia";
import { createRouter, createWebHashHistory } from "vue-router";
import { registerComponent } from "./components";

const vueApp = createApp({});
const store = createPinia();
const router = createRouter({
    history: createWebHashHistory(),
    routes: [],
});

registerComponent(vueApp);

vueApp.use(store);
vueApp.use(router);
vueApp.mount("#app");

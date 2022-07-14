require("./bootstrap");
import { createApp } from "vue";
import { createRouter, createWebHashHistory } from "vue-router";
import { registerComponent } from "./components";

const vueApp = createApp({});
const router = createRouter({
    history: createWebHashHistory(),
    routes: [],
});

registerComponent(vueApp);

vueApp.use(router);
vueApp.mount("#app");

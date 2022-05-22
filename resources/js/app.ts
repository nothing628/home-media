require("./bootstrap");
import { createApp } from "vue";
import Test from "@/components/test.vue";

const vueApp = createApp({});

vueApp.component("test", Test);
vueApp.mount("#app");

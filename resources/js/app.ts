require("./bootstrap");
import { createApp } from "vue";
import { registerComponent } from "./components";

const vueApp = createApp({});

registerComponent(vueApp);

vueApp.mount("#app");

import { App } from "vue";
import SliderContainer from "./slider/container.vue";
import SliderItem from "./slider/item.vue";
import DropdownContainer from "./dropdown-container.vue";

export function registerComponent(vueApp: App<Element>) {
    vueApp.component("slider-container", SliderContainer);
    vueApp.component("slider-item", SliderItem);
    vueApp.component("dropdown-container", DropdownContainer);
}

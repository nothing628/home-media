import { App } from "vue";
import SliderContainer from "./slider/container.vue";
import SliderItem from "./slider/item.vue";
import VideoTitle from "./video/video-title.vue";
import UploadPage from "./upload/upload-page.vue";
import DropdownContainer from "./dropdown-container.vue";

export function registerComponent(vueApp: App<Element>) {
    vueApp.component("slider-container", SliderContainer);
    vueApp.component("slider-item", SliderItem);
    vueApp.component("upload-page", UploadPage);
    vueApp.component("dropdown-container", DropdownContainer);
    vueApp.component("video-title", VideoTitle);
}

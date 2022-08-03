import { App, Plugin } from "vue";
import SliderContainer from "./slider/container.vue";
import SliderItem from "./slider/item.vue";
import VideoTitle from "./video/video-title.vue";
import VideoDescription from "./video/video-description.vue";
import VideoChannel from "./video/video-channel.vue";
import UploadPage from "./upload/upload-page.vue";
import DropdownContainer from "./dropdown-container.vue";

export function registerComponent(vueApp: App<Element>) {
    vueApp.component("slider-container", SliderContainer);
    vueApp.component("slider-item", SliderItem);
    vueApp.component("upload-page", UploadPage);
    vueApp.component("dropdown-container", DropdownContainer);
    vueApp.component("video-title", VideoTitle);
    vueApp.component("video-description", VideoDescription);
    vueApp.component("video-channel", VideoChannel);
}

export default {
    install(app, _options) {
        registerComponent(app);
    },
} as Plugin;

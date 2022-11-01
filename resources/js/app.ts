import "./bootstrap";
import "../css/app.css";

import { createApp, h } from "vue";
import { createPinia } from "pinia";
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

import ComponentPlugin from "./components";

const store = createPinia();
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        const vueApp =createApp({ render: () => h(app, props) })
        vueApp.use(ComponentPlugin);
        vueApp.use(store);
        vueApp.use(plugin)
        vueApp.use(ZiggyVue, Ziggy)
        vueApp.mount(el)

        return vueApp;
    },
});

InertiaProgress.init({ color: '#4B5563' });


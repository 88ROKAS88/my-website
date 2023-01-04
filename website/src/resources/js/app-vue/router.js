import { createWebHistory, createRouter } from "vue-router";

import IndexView from "./components/views/IndexView.vue";

const router = createRouter({
    history: createWebHistory("/spa"),
    routes: [{ path: "/", component: IndexView }],
});

export default router;

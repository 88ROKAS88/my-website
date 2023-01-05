import { createWebHistory, createRouter } from "vue-router";

import IndexView from "./components/views/IndexView.vue";
import ProjectsView from "./components/views/ProjectsView.vue";
import ProjectShowView from "./components/views/ProjectShowView.vue";
import ContactView from "./components/views/ContactView.vue";

const router = createRouter({
    history: createWebHistory("/spa"),
    routes: [
        ,
        { path: "/", component: IndexView, name: "index" },
        { path: "/projects", component: ProjectsView, name: "projects.index" },
        {
            path: "/projects/:project",
            component: ProjectShowView,
            name: "project.show",
        },
        { path: "/contact", component: ContactView, name: "contact" },
    ],
});

export default router;

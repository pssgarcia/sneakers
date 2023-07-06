import AboutPage from './../components/pages/AboutPage.vue';
import ContactPage from './../components/pages/ContactPage.vue';
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: "/about",
        name: "AboutPage",
        component: AboutPage
    },
    {
        path: "/contact",
        name: "ContactPage",
        component: ContactPage
    }
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;
import LoginPage from "./../components/LoginPage.vue";
import RegistrationPage from "./../components/RegistrationPage.vue";
import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/login",
        name: "LoginPage",
        component: LoginPage
    },
    {
        path: "/registration",
        name: "RegistrationPage",
        component: RegistrationPage
    }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_url),routes
});

export default router;
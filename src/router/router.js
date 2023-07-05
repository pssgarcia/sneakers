import AboutPage from './../components/pages/AboutPage.vue';
import ContactPage from './../components/pages/ContactPage.vue';
import HomePage from './../components/pages/HomePage.vue';
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: "/",
        name: "HomePage",
        component: HomePage
    },
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

    // {
    //     path: "/wishList",
    //     name: "wishListPage",
    //     component: wishListPage
    // },
    // {
    //     path: "/profile",
    //     name: "profilePage",
    //     component: profilePage
    // },
    // {
    //     path: "/cart",
    //     name: "cartPage",
    //     component: cartPage
    // }
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;
import { createRouter, createWebHistory } from 'vue-router';

import HomePage from '../components/pages/HomePage.vue';
import AboutPage from './../components/pages/AboutPage.vue';
import ContactPage from './../components/pages/ContactPage.vue';
import ShoppingCart from '../components/pages/ShoppingCart.vue';
import WishList from '../components/pages/WishList.vue';
import SneakersPage from '../components/pages/SneakersPage.vue';
import LoginPage from "./../components/LoginPage.vue";
import ProfilePage from "./../components/ProfilePage.vue";
import RegistrationPage from "./../components/RegistrationPage.vue";

const routes = [
   { path: '/', name: 'HomePage', component: HomePage },
   { path: '/cart', name: 'ShoppingCart', component: ShoppingCart },
   { path: '/wishlist', name: 'WishList', component: WishList },
   { path: '/sneakerspage/:sneakerId', name: 'SneakersPage', component: SneakersPage},
   {
        path: "/about",
        name: "AboutPage",
        component: AboutPage
    },
    {
        path: "/contact",
        name: "ContactPage",
        component: ContactPage
    },
      {
        path: "/login",
        name: "LoginPage",
        component: LoginPage
    },
    {
        path: "/registration",
        name: "RegistrationPage",
        component: RegistrationPage
    },
    {
        path: "/profile",
        name: "ProfilePage",
        component: ProfilePage
    }
];

const router = createRouter({
   history: createWebHistory(process.env.BASE_URL),
   routes
});

export default router;
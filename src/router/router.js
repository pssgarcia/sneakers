import { createRouter, createWebHashHistory } from 'vue-router';

import HomePage from '../components/pages/HomePage.vue';
import ShoppingCart from '../components/pages/ShoppingCart.vue';
import SneakersPage from '../components/pages/SneakersPage.vue';

const routes = [
   { path: '/', name: 'homePage', component: HomePage },
   { path: '/cart', name: 'shoppingCart', component: ShoppingCart },
   { path: '/sneakersPage', name: 'sneakersPage', component: SneakersPage }
];

const router = createRouter({
   history: createWebHashHistory(process.env.BASE_URL),
   routes
});

export default router;

import { createRouter, createWebHashHistory } from 'vue-router';

import HomePage from '../components/pages/HomePage.vue';
import ShoppingCart from '../components/pages/ShoppingCart.vue';
import WishList from '../components/pages/WishList.vue';
import SneakersPage from '../components/pages/SneakersPage.vue';

const routes = [
   { path: '/', name: 'HomePage', component: HomePage },
   { path: '/cart', name: 'ShoppingCart', component: ShoppingCart },
   { path: '/wishlist', name: 'WishList', component: WishList },
   { path: '/sneakerspage/:sneakerId', name: 'SneakersPage', component: SneakersPage}
];

const router = createRouter({
   history: createWebHashHistory(process.env.BASE_URL),
   routes
});

export default router;

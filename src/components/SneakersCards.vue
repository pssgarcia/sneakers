<template>
  <div class="container">
    <div class="message alert alert-success" v-if="addToCartMessage">{{ addToCartMessage }}</div>
    <div class="cart-reference">
      {{ shoppingCart.length }} items in Cart
    </div>
    <section class="sneakers-card">
      <figure v-for="(sneaker, index) in sneakerProps" :key="sneaker.sneakerId">                                            
         <img :src="getImageSrc(sneaker, index)" :alt="sneaker.sneakerId">
         <figcaption>
            <router-link :to="{ name: 'SneakersPage', params: { sneakerId: sneaker.sneakerId } }">
               <h3>{{ sneaker.sneakerName }}</h3>
            </router-link>
            <h4>{{ sneaker.brand }}</h4>
            <p>{{ sneaker.price }}</p>
            <aside class="button-group">
               <button class="addToCart" @click="addToCart(sneaker)">
                  <i class="fa-solid fa-cart-shopping"></i>
               </button>
               <button class="addToWishList" @click="addToWishList(sneaker)">
                  <i class="fa-solid fa-heart"></i>
               </button>
            </aside>
         </figcaption>
      </figure>
    </section>
  </div>
</template>


<script>
import VueCookies from "vue-cookies";

export default {
   name: "SneakersCards",
   props: {
      sneakerProps: []
   },
   data() {
      return {
         shoppingCart: [],
         wishList: [],
         addToCartMessage: '',
         sneakersImages: [
            "https://bit.ly/first-sneaker",
            "https://bit.ly/second-sneaker",
            "https://bit.ly/third-sneaker",
            "https://bit.ly/fourth-sneaker",
            "https://tinyurl.com/fifth-sneaker",
            "https://tinyurl.com/six-sneaker",
            "https://tinyurl.com/seven-sneaker",
            "https://tinyurl.com/eighth-sneaker",
            "https://tinyurl.com/nineth-sneaker",
            "https://tinyurl.com/tenth-sneaker",
            "https://tinyurl.com/eleventh-sneaker",
            "https://tinyurl.com/twelfth-sneaker",
            "https://tinyurl.com/thirteenth-sneaker",
            "https://tinyurl.com/fourteenth-sneaker",
            "https://tinyurl.com/fifteenth-sneaker",
            "https://tinyurl.com/sixteenth-sneaker",
            "https://tinyurl.com/seventeenth-sneaker",
            "https://tinyurl.com/eighteenth-sneaker",
            "https://tinyurl.com/nineteenth-sneaker",
            "https://tinyurl.com/twentieth-sneaker"
         ]
      }
   },
   methods: {
      getImageSrc(sneaker, index) {
         if (index < this.sneakersImages.length) {
            return this.sneakersImages[index];
         }
         return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLt1RTJ6HYQwrPK1FUK2sO0v1UruiJdLU27Q&usqp=CAU';
      },
      addToCart(sneaker) {
         if (VueCookies.isKey("cart")) {
            this.shoppingCart = VueCookies.get("cart");
            this.shoppingCart.push(sneaker);
            VueCookies.set("cart", JSON.stringify(this.shoppingCart));
         } else {
            this.shoppingCart.push(sneaker);
            VueCookies.set("cart", JSON.stringify(this.shoppingCart));
         }

         this.addToCartMessage = `Item successfully added to the cart.`;
      },
      addToWishList(sneaker) {
         if (VueCookies.isKey("wlist")) {
            this.wishList = VueCookies.get("wlist");
            this.wishList.push(sneaker);
            VueCookies.set("wlist", JSON.stringify(this.wishList));
         } else {
            this.wishList.push(sneaker);
            VueCookies.set("wlist", JSON.stringify(this.wishList));
         }
      }
   }
}
</script>

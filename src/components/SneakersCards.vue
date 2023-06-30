<template>
   <div class="container">
      <div class="cart-reference">
          {{ shoppingCart.length }} items in Cart
      </div>
      <router-link :to="{ name: sneakersPage, params: { sneakerId: sneaker.sneakerId } }" class="sneakers-card">
         <figure v-for="(sneaker, index) in propsSneakers" :key="sneaker.sneakerId">
            <img :src="getImageSrc(sneaker, index)" alt="{sneaker.sneakerId}">
            <figcaption>
               <h3>{{sneaker.sneakerName}}</h3>
               <h4>{{sneaker.brand}}</h4>
               <p>{{sneaker.price}}</p>
               <button class="addToCart" @click="addToCart(sneaker)">Add to Cart</button>
            </figcaption>
         </figure>
      </router-link>
   </div>
</template>

<script>
import VueCookies from "vue-cookies";

export default {
   name: "App",
   props: {
      propsSneakers: []
   },
   data() {
      return {
         shoppingCart: [],
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
         if (index < 20) {
            return this.sneakersImages[index];
         }
         return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLt1RTJ6HYQwrPK1FUK2sO0v1UruiJdLU27Q&usqp=CAU';
      },
       addToCart(sneaker) {
         if(VueCookies.isKey("cart")) {
            this.shoppingCart = VueCookies.get("cart");
            this.shoppingCart.push(sneaker);
            VueCookies.set("cart", JSON.stringify(this.shoppingCart));
         } else {
            // console.log(this.getImageSrc(sneaker));
            this.shoppingCart.push(sneaker);
            VueCookies.set("cart", JSON.stringify(this.shoppingCart));
         }
      }
   }
}
</script>

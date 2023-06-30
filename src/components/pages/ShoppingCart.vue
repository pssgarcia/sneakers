<template>
   <div>
      <h2>Your Cart</h2>
      <div v-if="localCart.length > 1" class="cart-reference">
         {{ localCart.length }}  items in cart
      </div>
      <div v-if="localCart.lentgh < 1">
          {{ localCart.length }}  item in cart
      </div>
      <button @click="clearCart">Clear cart</button>
      <figure v-for="(sneaker, index) in localCart" :key="sneaker.sneakerId">
         <img :src="getImageSrc(sneaker, index)" alt="{sneaker.sneakerId}">
         <figcaption>
            <h3>{{sneaker.sneakerName}}</h3>
            <h4>{{sneaker.brand}}</h4>
            <p>{{sneaker.price}}</p>
            <button class="removeFromCart" @click="removeFromCart(sneaker)">Remove from cart</button>
         </figcaption>
      </figure> 
   </div>
</template>

<script>
import VueCookies from 'vue-cookies';

export default {
   name: "ShoppingCart",
   props: {
      sneaker: {}
   },
   data() {
      return {
         localCart: [],
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
      removeFromCart(sneaker) {
         if(VueCookies.isKey("cart")){
            this.localCart.splice(sneaker, 1);
            VueCookies.set("cart", this.localCart);
            if(this.localCart.length === 0) {
               VueCookies.remove("cart");
            }
         }
      },
      clearCart() {
         if(VueCookies.isKey("cart")){
            this.localCart.splice(0, this.localCart.length);
            VueCookies.remove("cart");
         }
      },
      getImageSrc(sneaker, index) {
      if (index < 20) {
         return this.sneakersImages[index];
      }
      return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLt1RTJ6HYQwrPK1FUK2sO0v1UruiJdLU27Q&usqp=CAU';
      }
   },
   created(){
      if(VueCookies.isKey("cart")) {
         this.localCart = VueCookies.get("cart");
      } 
   }
}
</script>

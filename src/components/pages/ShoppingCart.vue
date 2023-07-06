<template>
   <article class="lists">
      <h2>Your Cart</h2>
      <aside>
         <div class="cart-reference">
            {{ localCart.length }}  items in cart
         </div>
         <button @click="clearCart">Clear cart</button>
      </aside>
      <section class="order-container" v-if="localCart.length > 0">
         <section class="sneaker-cart" v-show="true">
            <figure v-for="(sneaker, index) in localCart" :key="sneaker.sneakerId">
               <img :src="getImageSrc(sneaker, index)" :alt="sneaker.sneakerId">
               <figcaption>
                  <h3>{{sneaker.sneakerName}}</h3>
                  <h4>{{sneaker.brand}}</h4>
                  <p>{{sneaker.price}}</p>
                  <aside class="button-group">
                     <button class="removeFromCart" @click="removeFromCart(index)">
                        <i class="fa-solid fa-trash-can" style="color: #21252b;"></i>
                     </button>
                     <button class="addToWishList" @click="addToWishList(sneaker)">
                        <i class="fa-solid fa-heart"></i>
                     </button>
                  </aside>
               </figcaption>
            </figure> 
         </section>
         <article class="order-summary">
            <h2>Order Summary</h2>
            <aside>
               <p>Subtotal <span>${{ orderTotal }}</span></p>
               <p>Estimated Delivery <span>—</span></p>
               <p>Taxes <span>—</span></p>
            </aside>
            <h3>Total <span>${{ orderTotal }}</span></h3>
            <button>
               Checkout
            </button>
         </article>
      </section>
   </article>
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
         wishList: [],
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
   computed: {
      orderTotal() {
      const total = this.localCart.reduce((acc, sneaker) => {
        const price = parseFloat(sneaker.price.replace(/[^0-9.-]+/g, ''));
        return acc + price;
      }, 0);
      return total;
    }
   },
   methods: {
      // orderTotal() {
      //    return this.localCart.reduce((total, sneaker) => total + parseFloat(sneaker.price), 0);
      // },
      removeFromCart(index) {
         if(VueCookies.isKey("cart")){
            this.localCart.splice(index, 1);
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
      addToWishList(sneaker) {
         if (VueCookies.isKey("wlist")) {
            this.wishList = VueCookies.get("wlist");
            this.wishList.push(sneaker);
            VueCookies.set("wlist", JSON.stringify(this.wishList));
         } else {
            this.wishList.push(sneaker);
            VueCookies.set("wlist", JSON.stringify(this.wishList));
         }
      },
      getImageSrc(sneaker, index) {
         if (index < this.sneakersImages.length) {
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

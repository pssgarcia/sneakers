<template>
    <article class="lists">
      <aside>
         <h2>Your Wish List</h2>
         <button class="btn-list" @click="clearList">Clear List</button>
      </aside>
      <section class="sneakers-card">
         <figure v-for="(sneaker, index) in localList" :key="sneaker.sneakerId">
            <img :src="getImageSrc(sneaker, index)" :alt="sneaker.sneakerId">
            <figcaption>
               <h3>{{sneaker.sneakerName}}</h3>
               <h4>{{sneaker.brand}}</h4>
               <p>{{sneaker.price}}</p>
               <button class="removeFromCart" @click="removeFromList(sneaker)">
                  <i class="fa-solid fa-trash-can" style="color: #21252b;"></i>
               </button>
            </figcaption>
         </figure> 
      </section>
    </article>
</template>

<script>
import VueCookies from "vue-cookies";

export default {
   name: 'WishList',
   data() {
      return {
         localList: [],
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
      removeFromList(sneaker) {
         if(VueCookies.isKey("wlist")){
            this.localList.splice(sneaker, 1);
            VueCookies.set("wlist", this.localList);
            if(this.localList.length === 0) {
               VueCookies.remove("wlist");
            }
         }
      },
      clearList() {
         if(VueCookies.isKey("wlist")){
            this.localList.splice(0, this.localList.length);
            VueCookies.remove("wlist");
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
      if(VueCookies.isKey("wlist")) {
         this.localList = VueCookies.get("wlist");
      } 
   }
}
</script>
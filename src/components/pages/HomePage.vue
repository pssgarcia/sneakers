<template>
   <main>
      <!-- <router-view /> -->
      <SneakersCards :sneakerProps="sneakers"/>
   </main>
</template>

<script>
import SneakersCards from '../SneakersCards.vue';

export default {
   name: "HomePage",
   components: {
      SneakersCards
   },
   data() {
      return {
         sneakers: [],
         sneakersApi: "http://localhost/sneakers/rest/api/V1/sneaker.php"
      }
   },
   methods: {
      async getSneakers() {
         try {
            const response = await fetch(this.sneakersApi);
            this.sneakers = await response.json();
         } catch(error) {
            console.log(error);
         }
      }
   },
   created() {
      this.getSneakers();
   }
}
</script>
<template>
   <HeaderComponent/>
   <GalleryComponent/>
   <main>
      <SneakersCards :sneakerProps="sneakers"/>
   </main>
</template>

<script>
import SneakersCards from '../SneakersCards.vue';
import HeaderComponent from '../HeaderComponent.vue'
import GalleryComponent from '../GalleryComponent.vue'

export default {
   name: "HomePage",
   components: {
      SneakersCards,
      HeaderComponent,
      GalleryComponent
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
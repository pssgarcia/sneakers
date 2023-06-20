<template>
   <div>
      <figure v-for="(sneaker, index) in sneakers" :key="sneaker.sneakerId">
         <img :src="getImageSrc(sneaker, index)" alt="{{sneaker.sneakerId}}">
         <figcaption>
            <h3>{{sneaker.sneakerName}}</h3>
            <h4>{{sneaker.brand}}</h4>
            <p>{{sneaker.price}}</p>
         </figcaption>
      </figure>
   </div>
</template>

<script>
export default {
   name: "App",
   data() {
      return {
         sneakers: [],
         sneakersApi: "http://localhost/sneakers/rest/api/V1/sneaker.php",
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
      async getSneakers() {
         try {
            let response = await fetch(this.sneakersApi);
            this.sneakers = await response.json();
         } catch(error) {
            console.log(error);
         }
      },
      getImageSrc(sneaker, index) {
         if (index < 20) {
            return this.sneakersImages[index];
         }
         return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLt1RTJ6HYQwrPK1FUK2sO0v1UruiJdLU27Q&usqp=CAU';
      }
   },
   created() {
      this.getSneakers();
   }
}
</script>

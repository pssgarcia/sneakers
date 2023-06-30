<template>
   <figure v-for="(sneaker, index) in propsSneaker" :key="sneaker.sneakerId">
      <img :src="getImageSrc(sneaker, index)" alt="{sneaker.sneakerId}">
      <figcaption>
         <h3>{{sneaker.sneakerName}}</h3>
         <h4>{{sneaker.brand}}</h4>
         <p>{{sneaker.price}}</p>
         <button class="addToCart" @click="addToCart(sneaker)">Add to Cart</button>
      </figcaption>
   </figure>
</template>

<script>
export default {
   name: 'SneakersPage',
   props: {
      propsSneakers: []   
   }
}
</script>
<template>
   <div class="nav">
      <ul>
         <li>
            <router-link to="/">Home</router-link>
         </li>
         <li>
            <router-link to="/cart">View Cart</router-link>
         </li>
      </ul>
   </div>
</template>

<script>

export default {
   name: "NavBar"
}
</script>

<style scoped>
   li {
      display: flex;
      column-gap: 3vh;
      justify-content: center;
   }

   a {
      text-decoration: none;
      color: navy;
   }
</style>

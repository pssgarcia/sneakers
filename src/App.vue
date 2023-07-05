<template>
    <button> <router-link class="links" to="/login">Login Page</router-link> </button>
    <button> <router-link class="links" to="/registration">Registration Page</router-link> </button>
    <router-view/>
</template>

<script>



export default {
  name: 'App',
  components: {
    
  }
}
</script>

<style>
body{
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

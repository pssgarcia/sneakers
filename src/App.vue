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
  @import url("./css/login_css.css");
</style>

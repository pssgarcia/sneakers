<template>
  <button> <router-link class="links" to="/login">Login Page</router-link> </button>
  <button> <router-link class="links" to="/registration">Registration Page</router-link> </button>
  <NavComponent/>
  <router-view />   
  <FooterComponent/>
</template>

<script>
import NavComponent from './components/NavComponent.vue'
import FooterComponent from './components/FooterComponent.vue'

export default {
  name: 'App',
  components: {
    NavComponent,
    FooterComponent
  }
}
</script>

<style>
@import url("./css/login_css.css");
@import url("./css/style.css");
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;

}
</style>

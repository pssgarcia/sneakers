<template>
  <div>
    <NavBar />
    <NavComponent/>
    <router-view />
    <FooterComponent/>
  </div>
</template>

<script>
import NavBar from './components/NavBar.vue';
import NavComponent from './components/NavComponent.vue'
import FooterComponent from './components/FooterComponent.vue'

export default {
  name: 'App',
  components: {
    NavBar,
    NavComponent,
    FooterComponent
  }
}
</script>

<style>
@import url("./css/style.css");
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

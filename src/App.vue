<template>

  <NavComponent/>
  <HeaderComponent/>
  <FooterComponent/>

</template>

<script>
import HeaderComponent from './components/HeaderComponent.vue'
import NavComponent from './components/NavComponent.vue'
import FooterComponent from './components/FooterComponent.vue'

export default {
  name: 'App',
  components: {
    HeaderComponent,
    NavComponent,
    FooterComponent
  }
}
</script>

<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
@import url("../src/css/style.css");

/* #app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
} */
</style>

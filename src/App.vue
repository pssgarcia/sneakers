<template>

    <NavComponent/>
    <HeaderComponent/>
    <main class="home-main">
        <GalleryComponent/>
    </main>
    <FooterComponent/>
    <router-view/>
    <!-- <router-view/> -->

</template>

<script>
import HeaderComponent from './components/HeaderComponent.vue'
import NavComponent from './components/NavComponent.vue'
import GalleryComponent from './components/GalleryComponent.vue'
import FooterComponent from './components/FooterComponent.vue'

export default {
  name: 'App',
  components: {
    HeaderComponent,
    NavComponent,
    GalleryComponent,
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

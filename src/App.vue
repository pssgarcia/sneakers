<template>
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
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
@import url("../src/css/style.css");

</style>

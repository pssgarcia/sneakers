<template>
  <div>
    <SneakersCards />
  </div>
</template>

<script>
import SneakersCards from './components/SneakersCards.vue'

export default {
  name: 'App',
  components: {
    SneakersCards
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

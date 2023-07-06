<template>

    <HeaderComponent/>
    <main class="home-main">
        <GalleryComponent/>
    </main>

</template>

<script>
import HeaderComponent from '../HeaderComponent.vue'
import GalleryComponent from '../GalleryComponent.vue'

export default {
  name: 'App',
  components: {
    HeaderComponent,
    GalleryComponent
  }
}
</script>
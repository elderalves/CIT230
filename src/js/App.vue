<template>
  <home-adventures :adventures="adventures"></home-adventures>
</template>

<script>
  import Store from './vuex/store'
  import { mapGetters } from 'vuex'
  import HomeAdventures from './components/HomeAdventures.vue'

  export default {
    store: Store,
    computed: mapGetters({
      adventures: "getAdventures"
    }),
    components: {
      HomeAdventures
    }
  }
</script>

<style>

</style>
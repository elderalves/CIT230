<template>
  <section class="adventures-home">
    <div class="title-section">
        <h2>Adventures</h2>
    </div>

    <div class="container">    
        <div class="adventures-list">
            <home-single-adventure v-for="(adventure, index) in adventures" :adventure="adventure" :key="index"></home-single-adventure>
        </div>
    </div>
    <div class="stroke-section">
        <img src="images/stroke-1.png" alt="Visual Design Stroke" />
    </div>
  </section>
</template>

<script>
    import HomeSingleAdventure from "./HomeSingleAdventure.vue"

    export default {
        props: ["adventures"],
        components: {
            HomeSingleAdventure
        }
    }
</script>

<style>
  
</style>
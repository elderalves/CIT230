<template>
  <div class="adventures-item">
      <div class="adventures-image">
          <img :src="'images/' + adventure.thumb" alt="Adventure - Water Rafting">
      </div>
      <div class="adventures-content">
          <h2>{{ adventure.name }}</h2>
          <p>
              {{ adventure.description }}
          </p>
          <a href="waterrafing.php" class="btn btn-secondary">LET'S DO IT!</a>
      </div>
  </div>
</template>

<script>
    export default {
        props: ["adventure"]
    }
</script>

<style>
  
</style>
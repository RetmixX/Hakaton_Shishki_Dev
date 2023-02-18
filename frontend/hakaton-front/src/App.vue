<script setup>
import { RouterView } from "vue-router";
</script>

<template>
  <div class="default-layout">
    <RouterView />
  </div>
</template>

<style scoped>
.default-layout {
  max-width: 1100px;
  margin: 0 auto;
}
</style>

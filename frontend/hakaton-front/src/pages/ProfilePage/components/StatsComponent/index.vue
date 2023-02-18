<template>
  <div class="stats-list">
    <StatsCard />
    <StatsCard />
    <StatsCard />
  </div>
  <ThemesComponent />
</template>

<script>
import StatsCard from "./components/StatsCard/index.vue";
import ThemesComponent from "./components/themesComponent/index.vue";
export default {
  components: {ThemesComponent, StatsCard },
  name: "index"
}
</script>

<style lang="scss" scoped>
 .stats-list {
   display: flex;
   justify-content: space-between;
   gap: 17px;
 }
</style>
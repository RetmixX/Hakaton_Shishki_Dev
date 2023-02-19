<template>
  <div class="stats-list">
    <StatsCard v-for="stat in stats" :key="stat" :stat="stat" />
  </div>
  <ThemesComponent :theme="theme" />
</template>

<script>
import StatsCard from "./components/StatsCard/index.vue";
import ThemesComponent from "./components/themesComponent/index.vue";
export default {
  components: { ThemesComponent, StatsCard },
  name: "StatsComponent",
  props: {
    stats: {
      type: Array,
      required: true,
    },
    theme: {
      type: Object,
      required: true,
    }
  },
}
</script>

<style lang="scss" scoped>
 .stats-list {
   display: flex;
   justify-content: space-between;
   gap: 17px;
 }
</style>
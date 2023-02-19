<template>
  <div class="person-level">
    <div class="person-level--text">
      <p>Уровень {{ person.lvl ?? 0 }}</p>
      <p>{{ person.exp ?? 0 }}/1500</p>
    </div>
    <div class="person-level--bar-wrapper">
      <span class="person-level--bar"></span>
      <span class="person-level--bar-progress" :style="{width: person.exp / 1500 * 100 + '%', }"></span>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    person: {
      type: Object,
      required: true,
    }
  },
  name: "PersonLevel",
};
</script>

<style lang="scss" scoped>
@use "./style";
</style>

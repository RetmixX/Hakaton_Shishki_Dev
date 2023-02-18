<template>
  <div class="person-level">
    <div class="person-level--text">
      <p>Уровень 2</p>
      <p>1000/1500</p>
    </div>
    <div class="person-level--bar-wrapper">
      <span class="person-level--bar"></span>
      <span class="person-level--bar-progress"></span>
    </div>
  </div>
</template>

<script>
export default {
  name: "PersonLevel",
};
</script>

<style lang="scss" scoped>
@use "./style";
</style>

<template>
  <div class="card">
    <div class="card--title">
      {{ stat?.value ? stat?.value : stat.progress }}
    </div>
    <div class="card--description">
      {{ stat?.title ? stat?.title : "Прогресс" }}
    </div>
  </div>
</template>

<script>
export default {
  name: "StatsCard",
  props: {
    stat: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style lang="scss" scoped>
.card {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  width: 100px;
  height: 100px;
  background: #ffffff;
  border: 1px solid #745ba3;
  border-radius: 10px;
  font-family: "GT Eesti Display LC", sans-serif;
  &--title {
    font-style: normal;
    font-weight: 500;
    font-size: 32px;
    line-height: 37px;
    display: flex;
    align-items: center;
    text-align: center;
    text-transform: capitalize;
    color: #1e1e1e;
  }
  &--description {
    font-weight: 400;
    font-size: 14px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-align: center;
    color: #9fadb8;
  }
}
</style>

<template>
  <div class="person-card">
    <div class="person-card__image"></div>
    <div class="person-card__information">
      <div class="person-card__name">
        {{ person.name }}
      </div>
      <div class="person-card__case">
        {{ person.case }}
      </div>
      <div class="person-card__mail">
        {{ person.mail }}
      </div>
      <div class="person-card__birthday">
        {{ person.birthday }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    person: {
      type: Object,
      required: true,
    },
  },
  name: "PersonCard",
};
</script>

<style lang="scss" scoped>
@use "./style";
</style>

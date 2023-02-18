<template>
  <div class="person-card">
    <div class="person-card__image"></div>
    <div class="person-card__information">
      <div class="person-card__name">
        {{ person.name }}
      </div>
      <div class="person-card__join-date">
        <p class="person-card--label">Начало работы: </p>
        {{ person.joinDate }}
      </div>
      <div class="person-card__department">
        <p class="person-card--label">Отдел: </p>
        {{ person.department }}
      </div>
      <div class="person-card__speciality">
        <p class="person-card--label">Специльность: </p>
        {{ person.speciality }}
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

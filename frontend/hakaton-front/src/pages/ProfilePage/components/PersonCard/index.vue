<template>
  <div class="person-card">
    <div class="person-card__image"></div>
    <div class="person-card__information">
      <div class="person-card__name">
        {{ person.employee?.name ? person.employee?.name : person.hr_profile?.firstName }}<br>
        {{ person.employee?.middleName ? person.employee?.middleName : person.hr_profile?.middleName }}
      </div>
      <div class="person-card__join-date">
        <p class="person-card--label">Начало работы: </p>
        {{ person.employee?.workStart ? person.employee?.workStart : person.hr_profile?.startWork }}
      </div>
      <div class="person-card__department" v-if="person.employee?.division">
        <p class="person-card--label">Отдел: </p>
        {{ person.employee?.division }}
      </div>
      <div class="person-card__speciality">
        <p class="person-card--label">Специльность: </p>
        {{ person.employee?.rang ? person.employee?.rang : "HR" }}
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

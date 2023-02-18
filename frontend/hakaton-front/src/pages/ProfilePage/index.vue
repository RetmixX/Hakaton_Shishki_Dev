<template>
  <div class="page-wrapper">
    <PersonCard :person="person" />
    <SelectButton :unselectable="true" v-model="profileSectionSelected" :options="profileSection" optionLabel="name" />
    <PersonLevel  person=""/>
    <StatsComponent  v-if="profileSectionSelected?.name === 'Прогресс'" />
    <MapComponent  v-if="profileSectionSelected?.name === 'Карта'" />
  </div>
</template>

<script>
import PersonCard from "./components/PersonCard/index.vue";
import PersonLevel from "./components/PersonLevel/index.vue";
import StatsComponent from "./components/StatsComponent/index.vue";
import MapComponent from "@/pages/ProfilePage/components/MapComponent/index.vue";
export default {
  components: {MapComponent, PersonCard, PersonLevel, StatsComponent },
  name: "HomePage",
  data() {
    return {
      profileSectionSelected: {name: "Прогресс"},
      profileSection: [
        {name: "Прогресс"},
        {name: "Карта"},
        {name: "Чат"},
        {name: "Инфо"},
      ],
      person: {
        name: "Emily Nelson",
        speciality: "Frontend",
        department: "По работе со средствами массовой информации",
        joinDate: "22.01.2004",
      },
    };
  },
};
</script>

<style scoped>
.page-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
  min-width: 80%;
  max-width: 1100px;
}
</style>

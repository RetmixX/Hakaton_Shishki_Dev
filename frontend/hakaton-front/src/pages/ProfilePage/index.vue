<template>
  <div class="page-wrapper">
    <PersonCard :person="user" />
    <SelectButton
      v-model="profileSectionSelected"
      :options="profileSection"
      optionLabel="name"
    />
    <PersonLevel :person="user.employee" v-if="user?.employee" />
    <StatsComponent
      :stats="stats"
      :theme="user.theme"
      v-if="profileSectionSelected?.name === 'Прогресс'"
    />
    <MapComponent v-if="profileSectionSelected?.name === 'Карта'" />
    <InfoComponent v-if="profileSectionSelected?.name === 'Инфо'" />
    <EmployeeComponents
      :employees="user.employees"
      v-if="profileSectionSelected?.name === 'Сотрудники'"
    />
  </div>
</template>
<script>
import PersonCard from "./components/PersonCard/index.vue";
import PersonLevel from "./components/PersonLevel/index.vue";
import StatsComponent from "./components/StatsComponent/index.vue";
import MapComponent from "@/pages/ProfilePage/components/MapComponent/index.vue";
import InfoComponent from "@/pages/ProfilePage/components/InfoComponent/index.vue";
import EmployeeComponents from "@/pages/ProfilePage/components/EmployeersComponent/index.vue";
import { useUserStore } from "@/stores/user";
import { storeToRefs } from "pinia";
import axios from "axios";
export default {
  components: {
    EmployeeComponents,
    MapComponent,
    PersonCard,
    PersonLevel,
    StatsComponent,
    InfoComponent,
  },
  name: "ProfilePage",
  setup() {
    const userStore = useUserStore();
    const { user } = storeToRefs(userStore);
    return {
      user,
    };
  },
  data() {
    return {
      profileSectionSelected: {},
      profileSection: [],
      stats: [
        { title: "Выполнено", value: Math.round(Math.random() * 100) },
        { title: "Дней на должности", value: Math.round(Math.random() * 29) },
        { title: "Ценность", value: Math.round(Math.random() * 100) },
      ],
    };
  },
  mounted() {
    axios
      .get(
        `http://localhost/api/${localStorage.getItem("role").toLowerCase()}`,
        {
          headers: {
            Accept: "application/json",
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        }
      )
      .then((res) => {
        this.user = res.data;
        if (this.user?.employee) {
          this.profileSectionSelected = { name: "Прогресс" };
          this.profileSection = [
            { name: "Прогресс" },
            { name: "Карта" },
            { name: "Чат" },
            { name: "Инфо" },
          ];
        } else {
          this.profileSectionSelected = { name: "Сотрудники" };
          this.profileSection = [
            { name: "Сотрудники" },
            { name: "Карта" },
            { name: "Чат" },
            { name: "Инфо" },
            { name: "Встречи" },
          ];
        }
      })
      .catch((e) => {
        console.log(e);
      });
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

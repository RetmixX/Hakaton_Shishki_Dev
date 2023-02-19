<template>
  <div class="map-list">
    <Accordion>
      <AccordionTab v-if="user?.hr_profile">
        <template #header>
          <i class="pi pi-plus"></i>
          <span>Добавить тему</span>
        </template>
      </AccordionTab>

      <AccordionTab
        v-for="theme in themes"
        :key="theme"
        :disabled="theme.status === 'Не пройдена'"
      >
        <template #header>
          <i v-if="user?.hr_profile" class="pi pi-pencil"></i>
          <span>{{ theme.title }}</span>
        </template>
        {{ theme.description }}
      </AccordionTab>
    </Accordion>
  </div>
</template>

<script>
import axios from "axios";
import { storeToRefs } from "pinia";
import { useUserStore } from "@/stores/user";
export default {
  name: "InfoComponent",
  setup() {
    const userStore = useUserStore()
    const { user } = storeToRefs(userStore)
    return {
      user,
    }
  },
  data() {
    return {
      themes: [],
    };
  },
  mounted() {
    if (localStorage.getItem("role") === "Employee") {
      axios
        .get("http://localhost/api/roadmap", {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        })
        .then((res) => {
          this.themes = res.data.themes_employee;
        });
    } else {
      this.themes = [
        {
          title: "Редактировать тему",
          status: "В процессе",
          description: "Редактировать тему",
        },
        {
          title: "Редактировать тему",
          status: "В процессе",
          description: "Редактировать тему",
        },
      ];
    }
  },
};
</script>

<style lang="scss" scoped>
.map-list {
  display: flex;
  flex-direction: column;
  width: 335px;
  gap: 20px;
}
</style>

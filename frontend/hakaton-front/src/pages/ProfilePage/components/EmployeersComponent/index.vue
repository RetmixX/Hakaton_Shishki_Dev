<template>
  <div class="map-list">
    <Accordion>
      <AccordionTab
        v-for="employee in employees"
        :key="employee"
        :header="employee.name + ' ' + employee.middleName"
      >
        <div class="about-employee">
          <div class="about-left">
            <div class="person-card__join-date">
              <p class="person-card--label">Начало работы:</p>
              {{ employee?.workStart }}
            </div>
            <div class="person-card__department">
              <p class="person-card--label">Отдел:</p>
              {{ employee?.division }}
            </div>
            <div class="person-card__speciality">
              <p class="person-card--label">Специльность:</p>
              {{ employee?.rang }}
            </div>
          </div>
          <div class="about-right">
            <stats-card :stat="employee" class="about-right__progress" />
            <img
              src="@/assets/images/EmployeesComponent/chat.svg"
              class="about-right__chat"
              alt="chat"
            />
          </div>
        </div>
        <button class="button">Назначить встречу</button>
      </AccordionTab>
    </Accordion>
  </div>
</template>

<script>
import StatsCard from "@/pages/ProfilePage/components/StatsComponent/components/StatsCard/index.vue";

export default {
  name: "EmployeeComponents",
  components: { StatsCard },
  props: {
    employees: {
      type: Array,
      required: true,
    },
  },
};
</script>

<style scoped>
.map-list {
  display: flex;
  flex-direction: column;
  width: 335px;
  gap: 20px;
}
.about-employee {
  display: flex;
  justify-content: space-between;
}
.about-right__progress {
  width: 75px !important;
  height: 75px;
}
.about-right {
  display: flex;
  gap: 15px;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
}
.about-right__chat {
  cursor: pointer;
  width: 35px;
}
.button {
  z-index: 2;
  cursor: pointer;
  color: white;
  margin-top: 15px;
  border: none;
  outline: none;
  width: 100%;
  height: 30px;
  background: #987eda;
  border-radius: 16px;
}
</style>

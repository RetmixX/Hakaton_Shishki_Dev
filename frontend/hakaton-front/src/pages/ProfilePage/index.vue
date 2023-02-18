<template>
  Страница Профиля
  <PersonCard :person="person" />
</template>

<script>
import PersonCard from "./components/PersonCard/index.vue";
export default {
  components: { PersonCard },
  name: "HomePage",
  data() {
    return {
      person: {
        name: "Кирилл Черногривов",
        case: "Frontend",
        mail: "kirill.2201@inbox.ru",
        birthday: "22.01.2004",
      },
    };
  },
};
</script>

<style scoped></style>

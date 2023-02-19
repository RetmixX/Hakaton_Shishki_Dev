<template>
  <div class="map-list">
    <Accordion>
      <AccordionTab
        v-for="theme in information"
        :key="theme"
        :header="theme.title"
      >
        О чем: {{ theme.data }} <br>
        Отдел: {{ theme.division }} <br>
        Документы: {{ theme.reference }} <br>

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
    const userStore = useUserStore();
    const { user } = storeToRefs(userStore);
    return {
      user,
    };
  },
  data() {
    return {
      information: [],
    };
  },
  mounted() {
    axios
      .get(
        `http://localhost/api/doc/${localStorage
          .getItem("role")
          .toLowerCase()}`,
        {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        }
      )
      .then((res) => {
        this.information = res.data.all_documents;
        console.log(this.information)
      });
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

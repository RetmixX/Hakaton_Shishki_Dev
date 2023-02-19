<template>
  <header class="header">
    <img
      src="@/assets/images/loginPage/rosmol_logo_platform_cmyk.svg"
      alt=""
      class="logo"
    />
    <button class="header__exit" @click="logout" v-if="isAuth">Выйти</button>
  </header>
</template>

<script>
import { useUserStore } from "@/stores/user";
import { storeToRefs } from "pinia";

export default {
  name: "headerComponent",
  setup() {
    const userStore = useUserStore();
    const { user, isAuth } = storeToRefs(userStore);
    return {
      user,
      isAuth,
    };
  },
  methods: {
    logout() {
      this.isAuth = false;
      localStorage.removeItem("role");
      localStorage.removeItem("token");
      this.$router.go(0);
    },
  },
};
</script>

<style lang="scss" scoped>
.logo {
  height: 33px;
}
.header {
  margin: 0 auto;
  height: 100px;
  width: 335px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  &__exit {
    cursor: pointer;
    color: white;
    border: none;
    width: 100px;
    height: 30px;
    background: #987eda;
    border-radius: 20px;
  }
}
</style>

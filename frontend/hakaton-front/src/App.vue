<script setup>
import { RouterView } from "vue-router";
</script>

<template>
  <header-component />
  <div class="default-layout">
    <RouterView />
  </div>
  <footer class="footer">
    <img
      src="@/assets/images/footerComponent/footerLogo.svg"
      alt=""
      class="logo"
    />
    <div class="social-media">
      <img src="@/assets/images/footerComponent/telegram.svg" alt="" />
      <img src="@/assets/images/footerComponent/vk.svg" alt="" />
    </div>
  </footer>
</template>

<script>
import HeaderComponent from "@/components/HeaderComponent/index.vue";
export default {
  components: { HeaderComponent }
}
</script>

<style lang="scss" scoped>
.default-layout {
  max-width: 1100px;
  margin: 0 auto;
}
.footer {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 20px;
  align-self: flex-end;
  margin: 20px auto 0;
  width: 100%;
  height: 117px;
  background: #987eda;
}
.social-media {
  display: flex;
  gap: 10px;
}
</style>

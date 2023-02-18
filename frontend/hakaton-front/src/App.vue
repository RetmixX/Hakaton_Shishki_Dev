<script setup>
import { RouterView } from "vue-router";
</script>

<template>

    <header class="header">
      <img src="@/assets/images/loginPage/rosmol_logo_platform_cmyk.svg" alt="" class="logo">
    </header>
  <div class="default-layout">
    <RouterView />
  </div>
    <footer class="footer">
      <img src="@/assets/images/footerComponent/footerLogo.svg" alt="" class="logo">
      <div class="social-media">
        <img src="@/assets/images/footerComponent/telegram.svg" alt="">
        <img src="@/assets/images/footerComponent/vk.svg" alt="">
      </div>
    </footer>
</template>

<style scoped>
.default-layout {
  max-width: 1100px;
  margin: 0 auto;
}
.logo {
  width: 160px;
  height: 33px;
  margin: 0 auto;
}
.header {
  height: 100px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
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
  background: #987EDA;
}
.social-media {
  display: flex;
  gap: 10px;
}
</style>

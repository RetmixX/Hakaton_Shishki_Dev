import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: () => import("@/pages/HomePage"),
    },
    {
      path: "/profile",
      name: "profile",
      component: () => import("@/pages/ProfilePage/index.vue"),
    },
    {
      path: "/login",
      name: "login",
      component: () => import("@/pages/LoginPage"),
    },
  ],
});

export default router;

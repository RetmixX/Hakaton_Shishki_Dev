import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "profile",
      component: () => import("@/pages/ProfilePage/index.vue"),
    },
    {
      path: "/login",
      name: "login",
      component: () => import("@/pages/LoginPage/index.vue"),
    },
  ],
});

export default router;

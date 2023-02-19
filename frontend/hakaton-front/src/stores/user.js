import { defineStore } from "pinia";

export const useUserStore = defineStore("user", {
  state: () => ({
    user: {
      role: "unknown",
    },
    isAuth: localStorage.getItem("token"),
  }),

  actions: {},
});

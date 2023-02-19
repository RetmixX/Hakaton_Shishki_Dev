<template>
  <main>
    <form action="" class="form" @submit.prevent="login()">
      <div>
        <label for="email" class="form__input--name">Email</label>
        <div>
          <input type="email" id="email" class="form__input" v-model="mail" />
        </div>
      </div>
      <div>
        <label for="password" class="form__input--name">Пароль</label>
        <div>
          <input
            type="password"
            id="password"
            class="form__input"
            v-model="password"
          />
        </div>
      </div>
      <button type="submit" class="form__button">Войти</button>
    </form>
    <div>
      <div class="form__gradient-green"></div>
      <img src="@/assets/images/loginPage/qwe.png" alt="" class="auth__image" />
      <div class="form__gradient-lilac"></div>
    </div>
  </main>
</template>

<script>
import axios from "axios";
import { useUserStore } from "@/stores/user";
import { storeToRefs } from "pinia";
export default {
  name: "LoginPage",
  setup() {
    const userStore = useUserStore();
    const { user, isAuth } = storeToRefs(userStore);
    return {
      user,
      isAuth,
    };
  },
  data() {
    return {
      mail: "",
      password: "",
    };
  },
  methods: {
    login() {
      axios
        .post("http://localhost/api/login", {
          email: this.mail,
          password: this.password,
        })
        .then((res) => {
          localStorage.setItem("token", res.data.token);
          localStorage.setItem("role", res.data.role);
          this.user = res.data;
          this.isAuth = true;
          this.$router.push("/");
        })
        .catch((error) => {
          console.log(error);
        })
    },
  },
};
</script>

<style scoped>
main {
  overflow-x: hidden;
  padding: 0;
  margin: 0;
}

.form__input--name {
  font-style: normal;
  font-size: 14px;
  line-height: 16px;
  color: #1e1e1e;
}
header {
  height: 113px;
}

.form__input {
  width: 290px;
  height: 40px;
  border: #745ba3 1px solid;
  border-radius: 16px;
  padding: 0 5px;
  font-size: 15px;
}

.form__input:focus {
  outline: none;
  border: #bde351 1px solid;
}

.form {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
}

.form__button {
  cursor: pointer;
  width: 200px;
  height: 40px;
  background: #987eda;
  border-radius: 16px;
  border: none;
  color: #ffffff;
}

.form__gradient-green {
  position: absolute;
  width: 414px;
  height: 405px;
  left: -184px;
  top: 211px;
  background: radial-gradient(
    50% 50% at 50% 50%,
    #bde351 0%,
    rgba(217, 217, 217, 0) 100%
  );
  z-index: -1;
}

.form__gradient-lilac {
  position: relative;
  width: 414px;
  height: 405px;
  right: -168px;
  bottom: 133px;
  background: radial-gradient(
    50% 50% at 50% 50%,
    #745ba3 0%,
    rgba(217, 217, 217, 0) 100%
  );
}

.auth__image {
  position: relative;
  left: calc(50% - 349px / 2);
}
</style>

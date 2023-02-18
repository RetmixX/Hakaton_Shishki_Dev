<template>
  <header>
    <img src="@/assets/images/loginPage/rosmol_logo_platform_cmyk.svg" alt="" class="logo">
  </header>
  <main>
    <form action="" class="form">
      <div>
        <label for="email" class="form__input--name">Email</label>
        <div>
          <input type="email" id="email" class="form__input">
        </div>
      </div>

    <div>
      <label for="password" class="form__input--name">Пароль</label>
      <div>
        <input type="password" id="password" class="form__input">
      </div>
    </div>
      <button class="form__button">Войти</button>
    </form>
    <div>
      <div class="form__gradient-green"></div>
      <img src="@/assets/images/loginPage/qwe.png" alt="" class="auth__image">
      <div class="form__gradient-lilac"></div>
    </div>

  </main>
</template>

<script>
export default {
  name: "LoginPage"
}
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
  color: #1E1E1E;
}
header {
  height: 113px;
}

.logo {
  width: 160px;
  height: 33px;
  position: absolute;
  margin: auto;
   top: 50px; left: 0; right: 0;
}
.form__input {
  width: 290px;
  height: 40px;
  border: #745BA3 1px solid;
  border-radius: 16px;
}

.form {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
}

.form__button {
  width: 200px;
  height: 40px;
  background: #987EDA;
  border-radius: 16px;
  border: none;
  color: #FFFFFF;
}

.form__gradient-green {
  position: absolute;
  width: 414px;
  height: 405px;
  left: -184px;
  top: 211px;
  background: radial-gradient(50% 50% at 50% 50%, #BDE351 0%, rgba(217, 217, 217, 0) 100%);
  z-index: -1;
}

.form__gradient-lilac {
  position: relative;
  width: 414px;
  height: 405px;
  right: -168px;
  bottom: 133px;
  background: radial-gradient(50% 50% at 50% 50%, #745BA3 0%, rgba(217, 217, 217, 0) 100%);
}

.auth__image {
  position: relative;
  left: calc(50% - 349px/2);
}
</style>
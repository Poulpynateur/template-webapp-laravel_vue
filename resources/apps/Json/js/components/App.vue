<template>
  <div>
    <main-menu></main-menu>
    <h1>Welcome to ZomboCom !</h1>
  </div>
</template>

<script>

import MainMenu from '../../../../common/js/components/MainMenu';

export default {
  name: "App",
  components : {
    MainMenu
  }
};
</script>
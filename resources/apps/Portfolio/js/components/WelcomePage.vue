<template>
  <div id="welcome" class="bg-dark title-wrapper">
    <div class="title">
      <h1 class="welcome-background text-secondary">NDG</h1>
    </div>
    <div class="title">
      <h1 class="welcome-title">Nicolas</h1>
      <h1 class="welcome-title">DE GHESELLE</h1>
    </div>

    <div id="more_info">
      <i class="icon icon-arrow-down"></i>
    </div>
  </div>
</template>

<style scoped>
#more_info {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
}
#welcome {
  position: relative;
  min-height: 100vh;
  min-width: 100vw;
}

.welcome-background {
  user-select: none;
  line-height: 0.8;
  font-size: 40vw;
  margin: 0;
  font-weight: bold;
}

.welcome-title {
  line-height: 0.9;
  margin: 0;
  font-size: 12vw;
}
</style>

<script>
export default {
  name: "WelcomePage"
};
</script>
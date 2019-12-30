<template>
  <div>
    <div class="main-title-spacer bg-dark"></div>
    <section class="grid">
      <div class="column">
        <article class="card-container main-title">
          <div class="card-body content-center">
            <h1>Nicolas</h1>
            <h1>DE GHESELLE</h1>
          </div>
        </article>
      </div>
      <div class="column col-6">
        <article class="card-container main-statement">
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </article>
      </div>
    </section>    
  </div>
</template>

<style lang="scss" scoped>
@import "../../../../common/sass/variables.scss";
.main-title-spacer {
  height: 300px;
  background: $dark-color;
}

.main-title {
  background: $light-color;
  margin-top: -25%;

  h1 {
    padding: 0 100px;
    font-size: 80px;
  }
}
.main-statement {
  background: $gray-color-light;

  p {
    padding: 30px;
    font-size: 30px;
  }
}



</style>

<script>
export default {
  name: "Intro",
  components: {
  }
};
</script>
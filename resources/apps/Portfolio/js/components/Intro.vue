<template>
  <div class="container">
    <h1 class="title">
      <span>Nicolas</span><span>DE GHESELLE</span>
    </h1>
    <hr class="separator bg-primary">
    <article class="statement">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </article>
  </div>
</template>

<style lang="scss" scoped>
@import "../../../../common/sass/variables.scss";
.container {
    padding-top: 250px;
    padding-bottom: 100px;
}

.title {
  font-size: 5vw;
  margin: 0;

  @media (max-width: $size-md) {
		font-size: 3em;
	}

  span {
    margin-right: 0.3em;
    display: inline-block;
  }
}

.separator {
  margin: 20px 0;
}

.statement {
  font-size: 1.6em;
  text-align: justify;
}

</style>

<script>
export default {
  name: "Intro",
  components: {
  }
};
</script>
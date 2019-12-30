<template>
  <section class="container grid-md">
    <article class="columns content">
      <div class="description">
        <!-- Show personnal statement on hover -->
      </div>
      <div class="title">
        <h1>Nicolas</h1>
        <h1>DE GHESELLE</h1>
      </div>
    </article>   
  </section>
</template>

<style lang="scss" scoped>
@import "../../../../common/sass/variables.scss";
.container {
  padding : 100px 0;
}

.content {
  background: $gray-color-light;
  padding: 100px; 
  position: relative;

  .title h1 {
    font-size: 80px;
    line-height: 0.9em;
    margin: 0;
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
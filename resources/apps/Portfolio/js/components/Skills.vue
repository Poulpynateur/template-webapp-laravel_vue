<template>
  <section class="grid">
    <div class="column">
      <article class="card-container bg-white">
        <div class="card-body content-center">
          <h2>Skills</h2>
        </div>
      </article>
    </div>
    <div class="column">
      <div class="grid">
        <div class="column">
          <div class="card-container bg-dark">
          </div>
        </div>
        <div class="column">
          <div class="card-container bg-dark">
          </div>
        </div>
        <div class="column">
          <article class="card-container bg-white">
            <div class="card-body">
              <h2>Network</h2>
            </div>
          </article>
        </div>
        <div class="column">
          <article class="card-container bg-white">
            <div class="card-body">
              <h2>Algorithmy</h2>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "../../../../common/sass/variables.scss";

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
  name: "Skills"
};
</script>
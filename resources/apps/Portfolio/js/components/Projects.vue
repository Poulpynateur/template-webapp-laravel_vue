<template>
  <section class="projects">
    <div class="c-column">
      <div>
        <card name="Concrete stuff" isTitle="yes" widthRatio="2"></card>
      </div>
      <div>
        <card name="Projet 1"></card>
      </div>
      <div>
        <card name="Projet 2"></card>
      </div>
    </div>
    <div class="c-column">
      <div>
        <card name="Projet 3"></card>
      </div>
      <div>
        <card name="Projet 4"></card>
      </div>
      <div>
        <card name="More on github" isTitle="yes" widthRatio="2"></card>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "../../../../common/sass/variables.scss";

</style>

<script>
import Card from "./Card";

export default {
  name: "Skills",
  components: {
    Card
  }
};
</script>
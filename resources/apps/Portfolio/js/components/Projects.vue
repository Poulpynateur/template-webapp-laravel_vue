<template>
  <section class="projects">
    <div class="c-column">
      <card name="Concrete stuff" isTitle="yes" widthRatio="2"></card>
      <card name="Projet 1"></card>
      <card name="Projet 2"></card>
    </div>
    <div class="c-column">
      <card name="Projet 3"></card>
      <card name="Projet 4"></card>
      <card name="More on github" isTitle="yes" widthRatio="2"></card>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "../../../../common/sass/variables.scss";

</style>

<script>
import Card from "./Card";

export default {
  name: "Projects",
  components: {
    Card
  }
};
</script>
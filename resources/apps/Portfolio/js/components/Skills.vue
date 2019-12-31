<template>
  <section class="skills columns col-gapless">
    <div class="column col-6 col-lg-12">
      <div class="columns col-gapless">
        <div class="column col-6">
          <card name="Network"></card>
        </div>
        <div class="column col-6">
          <card name="Algorithmy"></card>
        </div>
        <div class="column col-12 col-lg-12">
          <card name="Software" class="col-1-2"></card>
        </div>
      </div>
    </div>
    <div class="column col-6 col-lg-12">
      <card name="Web"></card>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "../../../../common/sass/variables.scss";

.skills {
  width:100%;
}


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
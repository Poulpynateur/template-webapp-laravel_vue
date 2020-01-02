<template>
  <section class="skills">
    <div class="c-column">
      <div class="c-grid"
      v-bind:class="{ 'active': title_active }"
      @mouseover="title_active = true; title_widthRatio = 2"
      @mouseleave="title_active = false; title_widthRatio = null">
        <card class="skill-title" name="Network" isTitle="yes" v-bind:widthRatio="title_widthRatio"></card>
        <card class="skill-title" name="Algorithmy" isTitle="yes" v-bind:widthRatio="title_widthRatio"></card>
      </div>
      <card name="Software"></card>
    </div>
    <div class="c-column">
      <card name="Web"></card>
      <card name="Others" widthRatio="2"></card>
    </div>
    <div class="c-column-full">
      <card name="management and perks" isTitle="yes" widthRatio="4"></card>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "../../../../common/sass/variables.scss";

.skill-title {
  transition: 0.3s;
  width: 50%;

  @media (max-width: $size-md) {
    width: 100%;
  }
}
.active .skill-title {
  @media (min-width: $size-md) {
    width: 5%;
    color: transparent;
	}
}
.skill-title:hover {
  width: 95%;
  color: inherit;
}

</style>

<script>
import Card from "./Card";

export default {
  name: "Skills",
  data() {
    return {
      title_active: false,
      title_widthRatio: null,
    }
  },
  components: {
    Card
  }
};
</script>
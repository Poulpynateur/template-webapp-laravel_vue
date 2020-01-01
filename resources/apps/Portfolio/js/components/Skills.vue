<template>
  <section class="skills">
    <div class="c-column">
        <div class="c-grid"
          v-bind:class="{ 'hover': title_hover }"
          @mouseover="title_hover = true; title_widthRatio = 2"
          @mouseleave="title_hover = false; title_widthRatio = null">
          <div class="skill-title">
            <card name="Network" isTitle="yes" v-bind:widthRatio="title_widthRatio"></card>
          </div>
          <div class="skill-title">
            <card name="Algorithmy" isTitle="yes" v-bind:widthRatio="title_widthRatio"></card>
          </div>
        </div>
        <div>
          <card name="Software"></card>
        </div>
    </div>
    <div class="c-column">
      <div>
        <card name="Web"></card>
      </div>
      <div>
        <card name="Others" widthRatio="2"></card>
      </div>
    </div>
    <div class="col-12">
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
.hover .skill-title {
  @media (min-width: $size-md) {
    width: 0;
    opacity: 0;
	}
}
.skill-title:hover {
  width: 100%;
  opacity: 1;
}

</style>

<script>
import Card from "./Card";

export default {
  name: "Skills",
  data() {
    return {
      title_hover: false,
      title_widthRatio: null,
    }
  },
  components: {
    Card
  }
};
</script>
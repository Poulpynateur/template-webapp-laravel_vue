<template>
  <article class="content">
      <h3 class="name">{{ name }}</h3>
      <div>
          <slot></slot>
      </div>
  </article>
</template>

<style lang="scss" scoped>
@import "../../../../common/sass/variables.scss";

.content {

  width: 100%;
  padding-top: 100%;

  position: relative;
  background: $gray-color-medium;

  .name {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
  }
}

.content.col-1-2 {
  padding-top: 50%;
}

</style>


<script>
export default {
  name: "Card",
  props: ['name']
};
</script>
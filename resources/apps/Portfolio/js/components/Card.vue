<template>
  <div class="element-wrapper" v-bind:class="{'bg-gray' : background}">
    <div class="name">
      <h3>{{ name }}</h3>
    </div>
    <slot></slot>
  </div>
</template>

<style scoped>
.name {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  text-align: center;
}
.element-wrapper {
  position: relative;
  min-height: 300px;
}
</style>

<script>
export default {
  name: "Card",
  props: ['background', 'name']
};
</script>
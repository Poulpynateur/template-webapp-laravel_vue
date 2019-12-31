<template>
  <div class="columns col-gapless wrapper">
    <div class="column col-auto">
      <h2 class="title">
        <slot></slot>
      </h2>
    </div>
    <div class="column">
      <hr class="separator bg-primary">
    </div>
  </div>
</template>

<style scoped>
.separator {
  float: right;
  width: 100px;
  height: 4px;
  border: 0;
}
.wrapper {
  width: 100%;
  margin: 3em 0 2em 0;
  align-items: center;
}
.title {
  font-size: 3em;
  margin: 0 0.5em 0.3em 0;
}
</style>

<script>
export default {
  name: "SectionTitle"
};
</script>
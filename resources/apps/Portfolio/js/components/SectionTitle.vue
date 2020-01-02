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
}

.wrapper {
  width: 100%;
  padding: 5em 0 2em 5px;
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
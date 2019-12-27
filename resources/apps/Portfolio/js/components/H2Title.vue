<template>
  <div class="title-wrapper">
    <h2 class="title background text-secondary">
      <slot></slot>
    </h2>
    <div class="title">
      <span class="ornament text-primary">#</span>
      <h2 class="foreground">
        <slot></slot>
      </h2>
    </div>
  </div>
</template>

<style scoped>
.ornament {
  font-size: 3.5em;
  font-weight: bold;
}
.foreground {
  font-size: 4em;
  display: inline;
  margin: 0;
}
.background {
  font-size: 4.3em;
  font-weight: bold;
  display: inline;
  margin: 0;
}
</style>

<script>
export default {
  name: "H2Title"
};
</script>
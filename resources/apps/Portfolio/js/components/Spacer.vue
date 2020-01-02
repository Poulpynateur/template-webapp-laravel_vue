<template>
  <div class="spacer">
    <div class="col-10" >
      <div class="spacer-block-empty"></div>
    </div>
    <div class="col-2" >
      <div class="spacer-block"></div>
    </div>
    <div class="col-1" >
      <div class="spacer-block-empty"></div>
    </div>
    <div class="col-4" >
      <div class="spacer-block"></div>
    </div>
    <div class="col-2" >
      <div class="spacer-block"></div>
    </div>
    <div class="col-4" >
      <div class="spacer-block"></div>
    </div>
    <div class="col-1" >
      <div class="spacer-block"></div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "../../../../common/sass/variables.scss";
.spacer {
  align-content: baseline;
}
.spacer-block, .spacer-block-empty {
  margin: 2px;
  height: 40px;
}
.spacer-block {
  background: $gray-color-light;
}
</style>

<script>
export default {
  name: "Spacer"
};
</script>
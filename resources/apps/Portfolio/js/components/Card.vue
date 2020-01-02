<template>
<div>
  <div class="container" v-bind:class="{'col-1-1': !widthRatio, 'col-1-2': (widthRatio==2), 'col-1-4': (widthRatio==4)}">
    <div class="content">
      <article v-bind:class="{'bg-title': isTitle}">
        <h3 class="name">{{ name }}</h3>
        <div>
            <slot></slot>
        </div>
      </article>
    </div>
  </div>
</div>
</template>

<style lang="scss" scoped>
@import "../../../../common/sass/variables.scss";

.content, .container, .content article {
  width:100%;
  height:100%;
}

.container {
  position: relative;
}

.col-1-1 {
  padding-top: 100%;
}
.col-1-2 {
  padding-top: 50%;
}
.col-1-4 {
  padding-top: 25%;
}

.col-1-1, .col-1-2, .col-1-4 {
  transition: 0.3s;
  @media (max-width: $size-sm) {
		padding-top: 100%;
	}
  @media (min-width: $size-sm) and (max-width: $size-lg) {
		padding-top: 50%;
	}
}

.content {
  position: absolute;
  top: 0;
  left: 0;
  padding: 2px;

  .bg-title {
    background: $gray-color-light;
  }

  article {
    background: $gray-color-medium;
  }
}



</style>


<script>
export default {
  name: "Card",
  props: ['name', 'isTitle', 'widthRatio']
};
</script>
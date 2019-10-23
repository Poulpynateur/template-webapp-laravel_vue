<template>
  <div class="columns flex-vcenter">
    <div class="column col-sm-12 col-auto">
        <h1 class="text-primary title-font my-2">{{ title }}</h1>
    </div>

    <div class="column col-sm-12 col-lg-auto">
        <h3 class="m-2"><slot></slot></h3>
    </div>
  </div>
</template>


<script>
export default {
    name: "MainTitle",
    props: ['title']
};
</script>
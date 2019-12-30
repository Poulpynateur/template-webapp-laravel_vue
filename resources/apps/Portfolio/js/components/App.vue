<template>
  <div class="bg-dark text-dark">
    <intro></intro>
    <skills></skills>
  </div>
</template>

<script>
import Intro from './Intro';
import Skills from './Skills';

export default {
  name: "App",
  components: {
    Intro,
    Skills
  }
};
</script>
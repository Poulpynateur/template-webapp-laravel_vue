<template>
<div class="container">
  <div class="container grid-xl">
    <div class="columns">
      <intro></intro>

      <section-title>Skills</section-title>
      <skills></skills>
    </div>   
  </div>
</div>
</template>

<script>

import Intro from "./Intro";
import SectionTitle from "./SectionTitle";
import Skills from "./Skills";

export default {
  name: "App", 
  components: {
    Intro,
    SectionTitle,
    Skills
  }
};
</script>
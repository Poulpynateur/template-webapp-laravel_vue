<template>
  <div class="container grid-xl">
    <div class="columns">
      <intro></intro>

      <section-title>Skills</section-title>
      <skills></skills>

      <section-title>Projects</section-title>
      <projects></projects>
      <section-title>Contact</section-title>
    </div>   
  </div>
</template>

<script>

import Intro from "./Intro";
import SectionTitle from "./SectionTitle";
import Skills from "./Skills";
import Projects from "./Projects";

export default {
  name: "App", 
  components: {
    Intro,
    SectionTitle,
    Skills,
    Projects
  }
};
</script>
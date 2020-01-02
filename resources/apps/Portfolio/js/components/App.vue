<template>
<div>
  <div class="container grid-xl">
    <div class="columns">
      <intro></intro>

      <section-title>Skills</section-title>
      <spacer></spacer>
      <skills></skills>
      <spacer></spacer>
      
      <section-title>Projects</section-title>
      <projects></projects>

      <section-title>Contact</section-title>
      <contact></contact>
    </div>
  </div>
  <page-footer></page-footer>
</div>
</template>

<script>

import Intro from "./Intro";
import SectionTitle from "./SectionTitle";
import Skills from "./Skills";
import Projects from "./Projects";
import Contact from "./Contact";
import PageFooter from "./PageFooter";
import Spacer from "./Spacer";

export default {
  name: "App", 
  components: {
    Intro,
    SectionTitle,
    Skills,
    Projects,
    Contact,
    PageFooter,
    Spacer
  }
};
</script>
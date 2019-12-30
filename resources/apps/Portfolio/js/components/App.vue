<template>
  <div>
    <intro></intro>
  </div>
</template>

<script>
import Intro from './Intro';

import SectionTitle from './SectionTitle';
import Card from './Card';

export default {
  name: "App",
  components: {
    Intro,
    SectionTitle,
    Card
  }
};
</script>
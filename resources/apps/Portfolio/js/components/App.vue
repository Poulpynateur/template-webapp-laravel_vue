<template>
  <div class="container">
    <welcome-page></welcome-page>
    <h2-title>Test of a test</h2-title>
  </div>
</template>

<script>

import WelcomePage from './WelcomePage';
import H2Title from './H2Title'

export default {
  name: "App",
  components: {
    WelcomePage,
    H2Title
  }
};
</script>
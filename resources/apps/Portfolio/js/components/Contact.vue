<template>
  <section class="contact">
    <div class="mail">
      <h2 class="over-enthusiastic">Send me a mail!</h2>
      <a class="link" href="mailto:nicolas.degheselle@viacesi.fr">nicolas.degheselle@viacesi.fr</a>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "../../../../common/sass/variables.scss";

.contact {
  width: 100%;
  text-align: center;
}

.mail {
  margin: 10em 0 15em 0;
}

.over-enthusiastic {
  font-size: 3em;
  margin: 0;
}
.link {
  font-size: 2em;
}

</style>

<script>
export default {
  name: "Contact"
};
</script>
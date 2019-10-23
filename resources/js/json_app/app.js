require('./bootstrap');
window.Vue = require('vue');

import MainTitle from "./components/MainTitle";
import JsonFormating from "./components/JsonFormating";

new Vue({
  el: '#app',
  components: {
    MainTitle,
    JsonFormating
  }
})
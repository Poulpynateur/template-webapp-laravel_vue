require('./bootstrap');

window.Vue = require('vue');

Vue.component('exemple-component', require('./components/ExempleComponent.vue').default);

var app = new Vue({
    el: '#app'
});
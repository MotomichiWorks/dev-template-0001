import Vue from 'vue';

var app = new Vue({
  el : '#vue-app',
  components: {
    'vue-badge-0001': require('./module/vue-badge-0001'),
    'vue-btn-0001': require('./module/vue-btn-0001'),
    'vue-heading-0001': require('./module/vue-heading-0001'),
    'vue-loading-icon-0001': require('./module/vue-loading-icon-0001'),
  }
});

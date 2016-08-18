import Vue from 'vue';

var app = new Vue({
  el : '#vue-app',
  components: {
    'vue-badge-0001': require('./module/vue-badge-0001'),
    'vue-btn-0001': require('./module/vue-btn-0001'),
    'vue-footer-0001': require('./module/vue-footer-0001'),
    'vue-header-0001': require('./module/vue-header-0001'),
    'vue-heading-0001': require('./module/vue-heading-0001'),
    'vue-loading-icon-0001': require('./module/vue-loading-icon-0001'),
    'vue-step-info-0001': require('./module/vue-step-info-0001'),
    'vue-tooltip-0001': require('./module/vue-tooltip-0001'),
  }
});

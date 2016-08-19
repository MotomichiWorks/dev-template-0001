import Vue from 'vue';

var app = new Vue({
  el : '#vue-app',
  components: {
    'vue-badge-0001': require('./module/vue-badge-0001'),
    'vue-breadcrumb-0001': require('./module/vue-breadcrumb-0001'),
    'vue-btn-0001': require('./module/vue-btn-0001'),
    'vue-flash-message-0001': require('./module/vue-flash-message-0001'),
    'vue-footer-0001': require('./module/vue-footer-0001'),
    'vue-header-0001': require('./module/vue-header-0001'),
    'vue-heading-0001': require('./module/vue-heading-0001'),
    'vue-loading-icon-0001': require('./module/vue-loading-icon-0001'),
    'vue-paginator-0001': require('./module/vue-paginator-0001'),
    'vue-step-info-0001': require('./module/vue-step-info-0001'),
    'vue-tooltip-0001': require('./module/vue-tooltip-0001'),
  }
});

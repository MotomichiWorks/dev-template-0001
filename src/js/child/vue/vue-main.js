import Vue from 'vue';

var app = new Vue({
  el : '#app',
  components: {
    'btn-0001': {
      template: require('./module/btn-0001.html')
    },
    'heading-0001': {
      template: require('./module/heading-0001.html')
    },
  }
});

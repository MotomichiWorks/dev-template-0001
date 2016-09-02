module.exports = {
  props: {
    // 属性の宣言と初期値の設定
    items: {
      type: Array,
      default() {
        return [];
      },
    },
  },
  template: require('./vue-breadcrumb-0001.html'),
};

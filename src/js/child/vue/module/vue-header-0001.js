module.exports = {
  props: {
    // 属性の宣言と初期値の設定
    isLoggedIn: {
      default() {
        return false;
      },
    },
  },
  template: require('./vue-header-0001.html'),
};

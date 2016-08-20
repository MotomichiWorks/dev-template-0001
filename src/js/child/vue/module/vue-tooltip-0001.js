module.exports = {
  props: {
    // 属性の宣言と初期値の設定
    contents: {
      type: String,
      default: function () {
        return 'デフォルトコンテンツ';
      }
    },
  },
  template: require('./vue-tooltip-0001.html'),
}

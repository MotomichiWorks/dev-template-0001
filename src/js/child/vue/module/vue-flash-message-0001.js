module.exports = {
  props: {
    // 属性の宣言と初期値の設定
    modifier: {
      type: Object,
      default: function () {
        return {
          color: 'flash-message-0001--color-neutral',
        };
      }
    },
  },
  template: require('./vue-flash-message-0001.html'),
  data: function () {
    return {
      modifierColor: this.modifier.color,
    };
  },
}

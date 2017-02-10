module.exports = {
  props: {
    // 属性の宣言と初期値の設定
    modifier: {
      type: Object,
      default() {
        return {
          color: 'flash-message-0001--color-neutral',
        };
      },
    },
  },
  template: require('./vue-flash-message-0001.html'),
  data() {
    return {
      modifierColor: this.modifier.color,
    };
  },
};

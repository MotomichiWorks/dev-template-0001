module.exports = {
  props: {
    // 属性の宣言と初期値の設定
    modifier: {
      type: Object,
      default() {
        return {
          size: 'loading-icon-0001--l',
        };
      },
    },
  },
  template: require('./vue-loading-icon-0001.html'),
  data() {
    return {
      modifierSize: this.modifier.size,
    };
  },
};

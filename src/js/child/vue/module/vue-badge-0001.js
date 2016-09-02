module.exports = {
  props: {
    // 属性の宣言と初期値の設定
    txt: {
      type: Object,
      default() {
        return {
          main: '必須',
        };
      },
    },
    // 属性の宣言と初期値の設定
    modifier: {
      type: Object,
      default() {
        return {
          color: '',
        };
      },
    },
  },
  template: require('./vue-badge-0001.html'),
  data() {
    return {
      modifierColor: this.modifier.color,
    };
  },
};

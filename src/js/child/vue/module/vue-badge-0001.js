module.exports = {
  props: {
    // 属性の宣言と初期値の設定
    txt: {
      type: Object,
      default: function () {
        return {
          main: '必須'
        };
      }
    },
    // 属性の宣言と初期値の設定
    modifier: {
      type: Object,
      default: function () {
        return {
          color: ''
        };
      }
    },
  },
  template: require('./vue-badge-0001.html'),
  data: function () {
    return {
      modifierColor: this.modifier.color,
    };
  }
}

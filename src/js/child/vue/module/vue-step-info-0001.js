module.exports = {
  props: {
    // 属性の宣言と初期値の設定
    items: {
      type: Array,
      default: function () {
        return [
          {
            text: 'ステップ1',
            isActive: true,
          },
          {
            text: 'ステップ2',
            isActive: false,
          },
          {
            text: 'ステップ3',
            isActive: false,
          },
          {
            text: 'ステップ4',
            isActive: false,
          },
        ];
      }
    },
  },
  template: require('./vue-step-info-0001.html'),
  data: function () {
    console.log(this.items.length);
    return {
      modifierColumn: 'step-info-0001--' + this.items.length + '-column',
    };
  }
}

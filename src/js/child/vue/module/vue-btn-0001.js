module.exports = {
  props: {
    // 属性の宣言と初期値の設定
    txt: {
      type: Object,
      default() {
        return {
          main: 'ボタンラベル',
        };
      },
    },
    // 属性の宣言と初期値の設定
    modifier: {
      type: Object,
      default() {
        return {
          color: 'btn-0001--color-0001',
          height: 'btn-0001--height-s',
        };
      },
    },
    // 属性の宣言と初期値の設定
    btnType: {
      type: String,
      default() {
        return 'a';
      },
    },
    // 属性の宣言と初期値の設定
    aHref: {
      type: String,
      default() {
        return '#';
      },
    },
    // 属性の宣言と初期値の設定
    inputName: {
      type: String,
      default() {
        return 'name-undefined';
      },
    },
    // 属性の宣言と初期値の設定
    isDisabled: {
      default() {
        return false;
      },
    },
  },
  template: require('./vue-btn-0001.html'),
  data() {
    return {
      modifierColor: this.modifier.color,
      modifierHeight: this.modifier.height,
    };
  },
  methods: {
    clicked(event) {
      if (this.isDisabled) {
        event.preventDefault();
        return;
      }

      if (this.btnType === 'composite') {
        event.preventDefault();
        this.$el.querySelector('.btn-0001__type-submit-elm').click();
        return;
      }
    },
  },
};

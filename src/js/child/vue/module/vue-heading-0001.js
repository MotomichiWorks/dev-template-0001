module.exports = {
  components: {
    'vue-btn-0001': require('./vue-btn-0001'),
  },
  props: {
    // 属性の宣言と初期値の設定
    txt: {
      type: Object,
      default() {
        return {
          main: '',
          sub: '',
        };
      },
    },
    // 属性の宣言と初期値の設定
    modifier: {
      type: Object,
      default() {
        return {
          lv: 'heading-0001--lv-2',
        };
      },
    },
    // 属性の宣言と初期値の設定
    tagName: {
      type: String,
      default() {
        return 'h2';
      },
    },
    // 属性の宣言と初期値の設定
    hasIcon: {
      default() {
        return false;
      },
    },
    // 属性の宣言と初期値の設定
    hasBtn: {
      default() {
        return false;
      },
    },
    // 属性の宣言と初期値の設定
    btnTxt: {
      type: Object,
      default() {
        return {
          main: 'ボタンラベル',
        };
      },
    },
    // 属性の宣言と初期値の設定
    btnModifier: {
      type: Object,
      default() {
        return {
          color: 'btn-0001--color-0001',
          height: 'btn-0001--height-s',
        };
      },
    },
    // 属性の宣言と初期値の設定
    btnBtnType: {
      type: String,
      default() {
        return 'a';
      },
    },
    // 属性の宣言と初期値の設定
    btnAHref: {
      type: String,
      default() {
        return '#';
      },
    },
    // 属性の宣言と初期値の設定
    btnInputName: {
      type: String,
      default() {
        return 'name-undefined';
      },
    },
    // 属性の宣言と初期値の設定
    btnIsDisabled: {
      default() {
        return false;
      },
    },
  },
  template: require('./vue-heading-0001.html'),
  data() {
    return {
      modifierLv: this.modifier.lv,
    };
  },
};

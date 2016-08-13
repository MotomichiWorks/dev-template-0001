module.exports = {
  components: {
    'vue-btn-0001': require('./vue-btn-0001'),
  },
  props: {
    // 属性の宣言と初期値の設定
    txt: {
      type: Object,
      default: function () {
        return {
          main: '',
          sub: '',
        };
      }
    },
    // 属性の宣言と初期値の設定
    modifier: {
      type: Object,
      default: function () {
        return {
          lv: 'heading-0001--lv-2'
        };
      }
    },
    // 属性の宣言と初期値の設定
    tagName: {
      type: String,
      default: function () {
        return 'h2';
      }
    },
    // 属性の宣言と初期値の設定
    hasIcon: {
      default: function () {
        return false;
      }
    },
    // 属性の宣言と初期値の設定
    hasBtn: {
      default: function () {
        return false;
      }
    },
    // 属性の宣言と初期値の設定
    btnTxt: {
      type: Object,
      default: function () {
        return {
          main: 'ボタンラベル'
        };
      }
    },
    // 属性の宣言と初期値の設定
    btnModifier: {
      type: Object,
      default: function () {
        return {
          color: 'btn-0001--color-0001',
          height: 'btn-0001--height-s',
        };
      }
    },
    // 属性の宣言と初期値の設定
    btnBtnType: {
      type: String,
      default: function () {
        return 'a';
      }
    },
    // 属性の宣言と初期値の設定
    btnAHref: {
      type: String,
      default: function () {
        return '#';
      }
    },
    // 属性の宣言と初期値の設定
    btnInputName: {
      type: String,
      default: function () {
        return 'name-undefined';
      }
    },
    // 属性の宣言と初期値の設定
    btnIsDisabled: {
      default: function () {
        return false;
      }
    },
  },
  template: require('./vue-heading-0001.html'),
  data: function () {
    return {
      modifierLv: this.modifier.lv,
    };
  },
}

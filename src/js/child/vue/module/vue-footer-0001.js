module.exports = {
  props: {
    // 属性の宣言と初期値の設定
    params: {
      type: Object,
      default() {
        return {
          logo: {
            txt: '(c)MotomichiWorks',
            aHref: '#',
          },
        };
      },
    },
  },
  template: require('./vue-footer-0001.html'),
};

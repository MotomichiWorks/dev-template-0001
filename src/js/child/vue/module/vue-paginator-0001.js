module.exports = {
  props: {
    // 属性の宣言と初期値の設定
    params: {
      type: Object,
      default: function () {
        return {
          itemsLength: 100,
          itemsPerPage: 10,
          currentPage: 6,
        };
      }
    },
  },
  template: require('./vue-paginator-0001.html'),
  data: function () {
    return {
      itemsLength: this.params.itemsLength,
      itemsPerPage: this.params.itemsPerPage,
      pagesLength: Math.ceil( this.params.itemsLength / this.params.itemsPerPage ),
      currentPage: this.params.currentPage,
      startIndex: this.params.itemsPerPage * (this.params.currentPage - 1) + 1,
      endIndex: this.params.itemsPerPage * this.params.currentPage,
    };
  },
}

var $ = require('jquery');

$(function(){
  $('body')
    //スタイルガイドの表示サンプルセルの幅変更処理
    .on('click', '.js-sg-header-0001__view-area-width-changer-li', function(e){
      var $target = $(e.target),
        selectedWidth = $.trim($target.text());
      $('.js-sg-table-0001__display-cell-inner').css({'width': selectedWidth});
    })
    //スタイルガイドの「このコードを選択」ボタンをクリックしたときの処理
    .on('click', '.js-sg-table-0001__btn-select-this-code', function(e){
      $(e.target).prev().select();
    });
});

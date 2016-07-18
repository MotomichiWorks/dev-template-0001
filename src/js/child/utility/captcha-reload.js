(function($){
  $('.creload').on('click', function() {
    //.creloadがクリックされたときの処理
    //img要素のsrc属性を取得してmySrcに格納
    var mySrc = $(this).prev().attr('src');
    //glueの初期値を設定
    var glue = '?';
    //mySrcの中に'?'が含まれている場合の処理
    if(mySrc.indexOf('?')!=-1) {
      glue = '&';
    }
    //img要素のsrc属性を書き換え
    $(this).prev().attr('src', mySrc + glue + new Date().getTime());
    return false;
  });
})(jQuery);




(function($){
  $(function(){



    //template
    // var template = {
    //   'paginator' : function(){

    //   },
    //   'contents' : function(){

    //   }
    // }



    //データ削除して、テーブルデータを取得
    var connecting = {
      //doneのときに実行されるメソッド
      'done' : function(i_data){
        console.log('doneでした。');
        console.log(i_data);
      },
      //failのときに実行されるメソッド
      'fail' : function(i_e){
        console.log('failでした。');
        console.log(i_e);
      },
      //
      'ajax' : function(i_url){
        $.ajax({
          'type': 'get',
          'dataType': 'json',
          'url': i_url,
        })
        .done(function(data){
          connecting.done(data);
        })
        .fail(function(e){
          connecting.fail(e);
        });
      }
    }



    //
    $('.js__article__delete').click(function(){
      connecting.ajax(
        'https://practice.mw.top/Ajax/find_contacts'
      );
    });








  });
})(jQuery);


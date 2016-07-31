<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class StyleguidesController extends AppController {
  public $uses = array('Styleguide');
  public $helpers = array('SgTable0001');

  public function index() {

    function color(){
      $color_list = array(
        array(
          'heading' => '白黒グレーの色変数',
          'color' => array(
            array(
              'var_name' => '$general__white-color',
              'color_code' => '#ffffff',
              'desc' => '白くしたい箇所に使用する変数です。',
            ),

            array(
              'var_name' => '$general__black-color',
              'color_code' => '#000000',
              'desc' => '黒くしたい箇所に使用する変数です。',
            ),

            array(
              'var_name' => '$general__gray-color-0001',
              'color_code' => '#f3f3f3',
              'desc' => 'フォームフレームの背景色などに使用する変数です。',
            ),

            array(
              'var_name' => '$general__gray-color-0002',
              'color_code' => '#e9e9e9',
              'desc' => 'disabledのボタンなどに使用する変数です。',
            ),

            array(
              'var_name' => '$general__gray-color-0003',
              'color_code' => '#c9c9c9',
              'desc' => '',
            ),

            array(
              'var_name' => '$general__gray-color-0004',
              'color_code' => '#bdbdbd',
              'desc' => '',
            ),

            array(
              'var_name' => '$general__gray-color-0005',
              'color_code' => '#aaaaaa',
              'desc' => '',
            ),

            array(
              'var_name' => '$general__gray-color-0006',
              'color_code' => '#999999',
              'desc' => '',
            ),

            array(
              'var_name' => '$general__gray-color-0007',
              'color_code' => '#777777',
              'desc' => '',
            ),

            array(
              'var_name' => '$general__gray-color-0008',
              'color_code' => '#666666',
              'desc' => '',
            ),

            array(
              'var_name' => '$general__gray-color-0009',
              'color_code' => '#444444',
              'desc' => '',
            ),

            array(
              'var_name' => '$general__gray-color-0010',
              'color_code' => '#333333',
              'desc' => '一番濃いグレーの変数です。',
            ),
          )
        ),
        array(
          'heading' => 'それぞれ特定の意味を持った色変数',
          'color' => array(
            array(
              'var_name' => '$general__body-bg-color',
              'color_code' => '#ffffff',
              'desc' => 'モジュールの背景色をbodyに合わせたいときに使用する変数です。',
            ),

            array(
              'var_name' => '$general__body-text-color',
              'color_code' => '#333333',
              'desc' => 'モジュールの文字色をbodyに合わせたいときに使用する変数です。',
            ),

            array(
              'var_name' => '$general__key-color-0001',
              'color_code' => '#196ad8',
              'desc' => 'キーカラー1の変数です。',
            ),

            array(
              'var_name' => '$general__key-color-0002',
              'color_code' => '#db8915',
              'desc' => 'キーカラー2の変数です。',
            ),

            array(
              'var_name' => '$general__link-text-color-0001',
              'color_code' => '#196ad8',
              'desc' => '薄い背景色に置くリンクテキストの変数です。',
            ),

            array(
              'var_name' => 'general__link-text-color-0002',
              'color_code' => '#8ab4ec',
              'desc' => '黒などの濃い背景色に置くリンクテキストの変数です。',
            ),

            array(
              'var_name' => '$general__emphasis-color-0001',
              'color_code' => '#158000',
              'desc' => '強調させたい箇所に使う色です。テキストやボーダー、ボタンにも使用される変数です。',
            ),

            array(
              'var_name' => '$general__warning-color-0001',
              'color_code' => '#ff3333',
              'desc' => 'エラーメッセージや必須項目などに使用される変数です。',
            ),

            array(
              'var_name' => '$general__safety-color-0001',
              'color_code' => '#158000',
              'desc' => '成功時のメッセージなど、安全な通知を目立たせたいときに使用される変数です。',
            ),

            array(
              'var_name' => 'general__price-color-0001',
              'color_code' => '#ff3333',
              'desc' => 'ECサイトの価格表示に使用される変数です。',
            ),

            array(
              'var_name' => '$general__extra-color-0001',
              'color_code' => '#000000',
              'desc' => 'まだ用途は決まっていませんが、CSS設計上、変数だけ用意しています。色も後で再考予定です。',
            ),

            array(
              'var_name' => '$general__extra-color-0001',
              'color_code' => '#000000',
              'desc' => 'まだ用途は決まっていませんが、CSS設計上、変数だけ用意しています。色も後で再考予定です。',
            ),
          )
        ),
        array(
          'heading' => 'カテゴリタグ、通知バッヂなどの色変数',
          'color' => array(
            array(
              'var_name' => '$badge__color-0001',
              'color_code' => '#e04646',
              'desc' => 'カテゴリタグ、通知バッヂなどに使用する想定の変数です。色相を30度ずつずらしています。',
            ),

            array(
              'var_name' => '$badge__color-0002',
              'color_code' => '#e09346',
              'desc' => '同上',
            ),

            array(
              'var_name' => '$badge__color-0003',
              'color_code' => '#e0e046',
              'desc' => '同上',
            ),

            array(
              'var_name' => '$badge__color-0004',
              'color_code' => '#93e046',
              'desc' => '同上',
            ),

            array(
              'var_name' => '$badge__color-0005',
              'color_code' => '#46e046',
              'desc' => '同上',
            ),

            array(
              'var_name' => '$badge__color-0006',
              'color_code' => '#46e093',
              'desc' => '同上',
            ),

            array(
              'var_name' => '$badge__color-0007',
              'color_code' => '#46e0e0',
              'desc' => '同上',
            ),

            array(
              'var_name' => '$badge__color-0008',
              'color_code' => '#4693e0',
              'desc' => '同上',
            ),

            array(
              'var_name' => '$badge__color-0009',
              'color_code' => '#4646e0',
              'desc' => '同上',
            ),

            array(
              'var_name' => '$badge__color-0010',
              'color_code' => '#9346e0',
              'desc' => '同上',
            ),

            array(
              'var_name' => '$badge__color-0011',
              'color_code' => '#e046e0',
              'desc' => '同上',
            ),

            array(
              'var_name' => '$badge__color-0012',
              'color_code' => '#e04693',
              'desc' => '同上',
            ),
          )
        ),
      );

      return $color_list;
    }





    // viewに渡す連想配列を宣言
    $obj_for_view = array(
      'dir_list' => array(),
      'exist_table_ctp' => array(),
      'tr_list' => array(),
      'color_list' => array(),
    );

    // styleguideのディレクトリ一覧を取得
    $dir_path = APP_DIR . '/' . 'View' . '/' . 'Elements' . '/' . 'StyleguideTables';
    $dir_lv_1 = new Folder(ROOT . '/app/View/Elements/StyleguideTables');
    $read_result = $dir_lv_1->read();
    $obj_for_view['dir_list'] = $read_result[0];

    // table.ctpがディレクトリに存在するかを取得
    foreach ($obj_for_view['dir_list'] as $key => $value) {
      $dir_lv_2 = new Folder(ROOT . '/app/View/Elements/StyleguideTables/' . $value);
      $find_result = $dir_lv_2->find('.*\.ctp');
      $obj_for_view['exist_table_ctp'][$value] = empty($find_result[0]) ? FALSE : TRUE;
    }

    // styleguideのtrの一覧を取得
    foreach ($obj_for_view['dir_list'] as $key => $dir_name){
      $dir_lv_3 = new Folder(ROOT . '/app/View/Elements/StyleguideTables' . '/' . $dir_name . '/TableRows');
      $read_result = $dir_lv_3->read();
      $obj_for_view['tr_list'][$dir_name] = $read_result[1];
    }

    $obj_for_view['color_list'] = color();

    $this->set('obj', $obj_for_view);
  }//end of index action
}

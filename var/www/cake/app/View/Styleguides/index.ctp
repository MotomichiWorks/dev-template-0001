<?php
// スタイルガイド用のCSSは、プロジェクトで使用しないのでここで読み込み
echo $this->Html->css( '/assets/css/styleguide.css');
?>




<div id="page-top"></div>
<header class="sg-header-0001">
  <div class="sg-header-0001__first-wrap">
    <h1 class="sg-header-0001__heading-wrap">
      <a class="sg-header-0001__heading" href="#page-top">スタイルガイド</a>
    </h1>
    <ul class="sg-header-0001__view-area-width-changer-ul">
      <li class="sg-header-0001__view-area-width-changer-li js-sg-header-0001__view-area-width-changer-li">320</li>
      <li class="sg-header-0001__view-area-width-changer-li js-sg-header-0001__view-area-width-changer-li">768</li>
      <li class="sg-header-0001__view-area-width-changer-li js-sg-header-0001__view-area-width-changer-li">984</li>
      <li class="sg-header-0001__view-area-width-changer-li js-sg-header-0001__view-area-width-changer-li">1320</li>
    </ul>
    <div class="sg-header-0001__index-wrap js-sg-header-0001__index-wrap">
      <span class="sg-header-0001__index-heading">index</span>
      <ul class="sg-header-0001__index-ul sg-header-0001__index-ul--is-visible">
<?php
foreach ($obj['color_list'] as $value) {
?>
        <li class="sg-header-0001__index-li">
          <a class="sg-header-0001__index-anc" href="#<?php echo $value['heading'] ?>">
            <?php echo $value['heading'] ?>
          </a>
        </li>
<?php
}
?>

<?php foreach ($obj['dir_list'] as $key => $dir_name) { ?>
  <?php
  // ディレクトリだけ存在して、中にtable.ctpが存在しない場合はページ内リンクは不要なのでcontinue
  if ($obj['exist_table_ctp'][$dir_name] === FALSE) {
    continue;
  }
  ?>
        <li class="sg-header-0001__index-li">
          <a class="sg-header-0001__index-anc" href="#<?php echo $dir_name; ?>">
            <?php echo $dir_name; ?>
          </a>
        </li>
<?php } ?>
      </ul>
    </div>
  </div>
</header>



<?php foreach ($obj['color_list'] as $value) { ?>
<div class="sg-color-table" id="<?php echo $value['heading'] ?>">
  <div class="sg-color-table__first-wrap">
    <span class="sg-color-table__table-heading-wrap">
      <div class="sg-heading-0001">
        <h2 class="sg-heading-0001__h-elm">
          <?php echo $value['heading'] ?>
        </h2>
      </div>
    </span>
    <ul class="sg-color-table__table">
      <li class="sg-color-table__tr">
        <div class="sg-color-table__display-th">
          &nbsp;
        </div>
        <div class="sg-color-table__variable-name-th">
          変数名
        </div>
        <div class="sg-color-table__color-code-th">
          色コード
        </div>
        <div class="sg-color-table__desc-th">
          説明
        </div>
      </li>
  <?php foreach ($value['color'] as $row) { ?>
      <li class="sg-color-table__tr">
        <div class="sg-color-table__display-td" style="background-color:<?php echo $row['color_code']; ?>;">
          &nbsp;
        </div>
        <div class="sg-color-table__variable-name-td">
          <?php echo $row['var_name']; ?>
        </div>
        <div class="sg-color-table__color-code-td">
          <?php echo $row['color_code']; ?>
        </div>
        <div class="sg-color-table__desc-td">
          <?php echo $row['desc']; ?>
        </div>
      </li>
  <?php } ?>
    </ul>
  </div>
</div>
<?php } ?>





<?php
// テーブルを描画
foreach ($obj['dir_list'] as $key => $dir_name) {
  // ディレクトリだけ存在して、中にtable.ctpが存在しない場合はエラー回避のためにcontinue
  if ($obj['exist_table_ctp'][$dir_name] === FALSE) {
    continue;
  }
  // table.ctpを読み込み
  echo $this->element('StyleguideTables/' . $dir_name . '/table',
    array(
      'obj' => $obj,
      'dir_name' => $dir_name
    )
  );
}
?>


















<br><br><br>

<div class="">



  <div class="form-frame-0001">
    <div class="form-frame-0001__first-wrap">
      <span class="form-frame-0001__second-wrap">
        <ul class="form-frame-0001__table">



          <li class="form-frame-0001__tr">
            <div class="form-frame-0001__left-cell">
              <p class="form-frame-0001__left-cell__heading-wrap">
                タイトル タイトル タイトル タイトル タイトル
              </p>
              <div class="form-frame-0001__left-cell__badge-wrap">
                <vue-badge-0001
                  :txt="{main: '必須'}"
                  :modifier="{color: 'badge-0001--color-0001'}" />
              </div>
              <div class="form-frame-0001__left-cell__tooltip-wrap">
                <vue-tooltip-0001 v-cloak>
                  <p slot="slot-0001" class="hoge">
                    <span class="foo">
                      コンテンツ<br>コンテンツ
                    </span>
                  </p>
                </vue-tooltip-0001>
              </div>
            </div>
            <div class="form-frame-0001__right-cell">
              <p class="form-frame-0001__right-cell__example-top">
                例 : example-top
              </p>
              <div class="form-frame-0001__right-cell__field-wrap">
                <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
                  <div class="form-type-text-0001 form-type-text-0001--form-height-md">
                    <input class="form-type-text-0001__input-element" type="text">
                  </div>
                </span>
                <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
                  <div class="form-type-text-0001 form-type-text-0001--form-height-md">
                    <input class="form-type-text-0001__input-element" type="text">
                  </div>
                </span>
                <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
                  <div class="form-type-text-0001 form-type-text-0001--form-height-md">
                    <input class="form-type-text-0001__input-element" type="text">
                  </div>
                </span>
                <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
                  <p class="form-frame-0001__right-cell__field-col__text">
                    -てきすとテキスト@example.com
                  </p>
                </span>
              </div>
              <p class="form-frame-0001__right-cell__error-message">
                1文字以上入力してください。
              </p>
              <p class="form-frame-0001__right-cell__example-bottom">
                例 : example-bottom
              </p>
              <ul class="form-frame-0001__right-cell__notes-ul">
                <li class="form-frame-0001__right-cell__notes-li">
                  <div class="form-frame-0001__right-cell__notes-li__heading">
                    タイトル
                  </div>
                  <div class="form-frame-0001__right-cell__notes-li__text">
                    本文 本文 本文 本文 本文 本文 本文 本文 本文
                  </div>
                </li>
                <li class="form-frame-0001__right-cell__notes-li">
                  <div class="form-frame-0001__right-cell__notes-li__heading">
                    タイトル
                  </div>
                  <div class="form-frame-0001__right-cell__notes-li__text">
                    本文 本文 本文 本文 本文 本文 本文 本文 本文
                  </div>
                </li>
              </ul>
            </div>
          </li>



          <li class="form-frame-0001__tr">
            <div class="form-frame-0001__left-cell">
              <p class="form-frame-0001__left-cell__heading-wrap">
                タイトル タイトル タイトル
              </p>
              <div class="form-frame-0001__left-cell__badge-wrap">
                <vue-badge-0001
                  :txt="{main: '必須'}"
                  :modifier="{color: 'badge-0001--color-0001'}" />
              </div>
              <div class="form-frame-0001__left-cell__tooltip-wrap">
                <vue-tooltip-0001 v-cloak>
                  <p slot="slot-0001" class="hoge">
                    <span class="foo">
                      コンテンツ<br>コンテンツ
                    </span>
                  </p>
                </vue-tooltip-0001>
              </div>
            </div>
            <div class="form-frame-0001__right-cell">
              <div class="form-frame-0001__right-cell__field-wrap">
                <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--2">
                  <div class="form-type-text-0001 form-type-text-0001--form-height-md">
                    <input class="form-type-text-0001__input-element" type="text">
                  </div>
                </span>
                <span class="form-frame-0001__right-cell__field-col">
                  <p class="form-frame-0001__right-cell__field-col__text">
                    -
                  </p>
                </span>
                <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--2">
                  <div class="form-type-text-0001 form-type-text-0001--form-height-md">
                    <input class="form-type-text-0001__input-element" type="text">
                  </div>
                </span>
                <span class="form-frame-0001__right-cell__field-col">
                  <p class="form-frame-0001__right-cell__field-col__text">
                    -
                  </p>
                </span>
                <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--2">
                  <div class="form-type-text-0001 form-type-text-0001--form-height-md">
                    <input class="form-type-text-0001__input-element" type="text">
                  </div>
                </span>
              </div>
              <p class="form-frame-0001__right-cell__example-bottom">
                例 : 03-1234-5678
              </p>
            </div>
          </li>



        </ul>
      </span>
    </div>
  </div>



</div>

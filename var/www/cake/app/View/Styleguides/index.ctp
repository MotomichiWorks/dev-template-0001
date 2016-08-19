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



























<h1>スタイルガイド</h1>





<br><br>



<div class="table-like-0001">
  <div class="table-like-0001__first-wrap">
    <span class="table-like-0001__second-wrap">
      <ul class="table-like-0001__table">
        <li class="table-like-0001__tr">
          <div class="table-like-0001__th-0001">
            <span class="table-like-0001__th-inner">
              タグ
            </span>
          </div>
          <div class="table-like-0001__th-0002">
            <span class="table-like-0001__th-inner">
              編集
            </span>
          </div>
          <div class="table-like-0001__th-0002">
            <span class="table-like-0001__th-inner">
              削除
            </span>
          </div>
        </li>
        <li class="table-like-0001__tr">
          <div class="table-like-0001__td-0001">
            <span class="table-like-0001__td-inner">
              <div class="table-like-0001__td-inner__box-100-p">
                <div class="table-like-0001__text-wrap">
                  xhtml
                </div>
              </div>
            </span>
          </div>
          <div class="table-like-0001__td-0002">
            <span class="table-like-0001__td-inner">
              <div class="table-like-0001__td-inner__box-75-p">
                <div class="form-type-text-0001 form-type-text-0001--form-height-m">
                  <input class="form-type-text-0001__input-element" type="text">
                </div>
              </div>
              <div class="table-like-0001__td-inner__box-25-p">
                <div class="table-like-0001__text-wrap">
                  <a class="table-like-0001__anc-elm" href="#">
                    編集
                  </a>
                </div>
              </div>
              <div class="table-like-0001__td-inner__box-100-p">
                <p class="table-like-0001__warning-text ng-binding ng-scope" ng-if="item.errors.text[0]">
                  エラーメッセージ
                </p>
              </div>
            </span>
          </div>
          <div class="table-like-0001__td-0002">
            <span class="table-like-0001__td-inner">
              <div class="table-like-0001__td-inner__box-100-p">
                <div class="table-like-0001__text-wrap">
                  <a class="table-like-0001__anc-elm" href="#">
                    削除
                  </a>
                </div>
              </div>
            </span>
          </div>
        </li>
        <li class="table-like-0001__tr">
          <div class="table-like-0001__td-0001">
            <span class="table-like-0001__td-inner">
              <div class="table-like-0001__td-inner__box-100-p">
                <div class="table-like-0001__text-wrap">
                  html5
                </div>
              </div>
            </span>
          </div>
          <div class="table-like-0001__td-0002">
            <span class="table-like-0001__td-inner">
              <div class="table-like-0001__td-inner__box-75-p">
                <div class="form-type-text-0001 form-type-text-0001--form-height-m">
                  <input class="form-type-text-0001__input-element" type="text">
                </div>
              </div>
              <div class="table-like-0001__td-inner__box-25-p">
                <div class="table-like-0001__text-wrap">
                  <a class="table-like-0001__anc-elm" href="#">
                    編集
                  </a>
                </div>
              </div>
              <div class="table-like-0001__td-inner__box-100-p">
                <p class="table-like-0001__notes-text ng-binding ng-scope" ng-if="item.errors.text[0]">
                  説明文
                </p>
              </div>
            </span>
          </div>
          <div class="table-like-0001__td-0002">
            <span class="table-like-0001__td-inner">
              <!-- ngIf: !item.ajaxResponse -->
              <div class="table-like-0001__td-inner__box-100-p">
                <div class="table-like-0001__text-wrap">
                  <a class="table-like-0001__anc-elm" href="#">
                    削除
                  </a>
                </div>
              </div>
            </span>
          </div>
        </li>
      </ul>
    </span>
  </div>
</div>



<br><br>



<h2>form-type-textarea-0001</h2>
<div class="form-type-textarea-0001">
  <textarea class="form-type-textarea-0001__input-elm"></textarea>
</div>



<h2>form-frame</h2>
<div class="form-frame-0002">
  <div class="form-frame-0002__first-wrap">
    <span class="form-frame-0002__second-wrap">
      <div class="form-frame-0002__third-wrap">
        <ul class="form-frame-0002__table">
          <li class="form-frame-0002__tr">
            <div class="form-frame-0002__th">
              メールアドレス
            </div>
            <div class="form-frame-0002__td">
              <div class="form-type-text-0001 form-type-text-0001--form-height-m">
                <input class="form-type-text-0001__input-element" type="password">
              </div>
            </div>
          </li>
          <li class="form-frame-0002__tr">
            <div class="form-frame-0002__th">
              パスワード
            </div>
            <div class="form-frame-0002__td">
              <div class="form-type-text-0001 form-type-text-0001--form-height-m">
                <input class="form-type-text-0001__input-element" type="text">
              </div>
            </div>
          </li>
        </ul>
        <span class="form-frame-0002__checkbox-wrap-0001">
          <div class="form-type-checkbox-0001">
            <div class="form-type-checkbox-0001__first-wrap">
              <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="form-frame-0002-checkbox1">
              <label class="form-type-checkbox-0001__label-elm" for="form-frame-0002-checkbox1">
                次回からメールアドレスの入力を省略する
              </label>
            </div>
          </div>
        </span>
        <span class="form-frame-0002__text-link-wrap-0001">
          パスワードを忘れた方は<a class="form-frame-0002__text-link-wrap-0001__anc-elm" href="#">こちら</a>
        </span>
        <span class="form-frame-0002__btn-wrap-0001">
          <div class="btn-0001 btn-0001--color-0001 btn-0001--height-l">
            <a class="btn-0001__clickable-elm" href="#">
              <span class="btn-0001__label">
                ボタンラベル
              </span>
            </a>
            <input class="btn-0001__type-submit-elm" type="submit" name="name" value="value">
          </div>
        </span>
      </div>
    </span>
  </div>
</div>



<br><br>








<h2>form-type-radio</h2>
<div class="form-type-radio-0001">
  <div class="form-type-radio-0001__first-wrap">
    <input class="form-type-radio-0001__input-elm" type="radio" id="radio">
    <label class="form-type-radio-0001__label-elm" for="radio">
      ラベル文字列
    </label>
  </div>
</div>

<br>

<div class="form-type-radio-0001">
  <div class="form-type-radio-0001__first-wrap">
    <input class="form-type-radio-0001__input-elm form-type-radio-0001__input-elm--error" type="radio" id="radio-error">
    <label class="form-type-radio-0001__label-elm" for="radio-error">
      ラベル文字列
    </label>
  </div>
</div>

<br>

<div class="form-type-radio-0001">
  <div class="form-type-radio-0001__first-wrap">
    <input class="form-type-radio-0001__input-elm" type="radio" id="radio-disabeld" disabled>
    <label class="form-type-radio-0001__label-elm" for="radio-disabled">
      ラベル文字列
    </label>
  </div>
</div>

<br>

<div class="form-type-radio-0001">
  <div class="form-type-radio-0001__first-wrap">
    <input class="form-type-radio-0001__input-elm" type="radio" id="radio-disabled-checked" disabled checked>
    <label class="form-type-radio-0001__label-elm" for="radio-disabled-checked">
      ラベル文字列
    </label>
  </div>
</div>

<br><br>


<h2>form-type-text</h2>
<div class="form-type-text-0001 form-type-text-0001--form-height-s">
  <input class="form-type-text-0001__input-element" type="text">
</div>

<br>

<div class="form-type-text-0001 form-type-text-0001--form-height-m">
  <input class="form-type-text-0001__input-element" type="text">
</div>

<br>

<div class="form-type-text-0001 form-type-text-0001--form-height-l">
  <input class="form-type-text-0001__input-element" type="text">
</div>

<br><br>

<h2>form-frame</h2>
<div class="form-frame-0001">
  <div class="form-frame-0001__first-wrap">
    <span class="form-frame-0001__second-wrap">
      <div class="form-frame-0001__third-wrap">
        <ul class="form-frame-0001__like-table">



          <li class="form-frame-0001__like-tr">
            <div class="form-frame-0001__left-column">
              <ul class="form-frame-0001__left-column__table">
                <li class="form-frame-0001__left-column__tr">
                  <span class="form-frame-0001__left-column__text-wrap">
                    タイトル
                  </span>
                  <span class="form-frame-0001__left-column__badge-wrap">
                    <div class="badge-0001">
                      <p class="badge-0001__first-wrap">
                        必須
                      </p>
                    </div>
                  </span>
                  <span class="form-frame-0001__left-column__tooltip-wrap">
                    <div class="tooltip-0001">
                      <div class="tooltip-0001__contents-wrap">
                        ここにコンテンツを挿入
                      </div>
                      <a class="tooltip-0001__icon" href="#">
                        ?
                      </a>
                    </div>
                  </span>
                </li>
              </ul>
            </div>
            <div class="form-frame-0001__right-column">
              <p class="form-frame-0001__right-column__example-top">
                上部に入力例や説明文を表示する領域
              </p>
              <ul class="form-frame-0001__right-column__inner-wrap">
                <li class="form-frame-0001__right-column__content-wrap--50-p">
                  <div class="form-type-text-0001 form-type-text-0001--form-height-m">
                    <input class="form-type-text-0001__input-element" type="text">
                  </div>
                </li>
                <li class="form-frame-0001__right-column__example-side">
                  入力例を横に置きたいとき
                </li>
              </ul>
              <p class="form-frame-0001__right-column__example-bottom">
                下部に入力例や説明文を表示する領域
              </p>
              <ul class="form-frame-0001__right-column__notes-ul">
                <li class="form-frame-0001__right-column__notes-li">
                  <div class="form-frame-0001__right-column__notes-heading">
                    ノーツヘディング
                  </div>
                  <div class="form-frame-0001__right-column__notes-text">
                    ノーツ本文
                  </div>
                </li>
                <li class="form-frame-0001__right-column__notes-li">
                  <div class="form-frame-0001__right-column__notes-heading">
                    ノーツヘディング
                  </div>
                  <div class="form-frame-0001__right-column__notes-text">
                    ノーツ本文
                  </div>
                </li>
              </ul>
              <ul class="form-frame-0001__right-column__commentary-ul">
                <li class="form-frame-0001__right-column__commentary-li">
                  <div class="form-frame-0001__right-column__commentary-heading">
                    コメンタリーヘディング
                  </div>
                  <div class="form-frame-0001__right-column__commentary-text">
                    コメンタリーテキスト
                  </div>
                </li>
                <li class="form-frame-0001__right-column__commentary-li">
                  <div class="form-frame-0001__right-column__commentary-heading">
                    コメンタリーヘディング
                  </div>
                  <div class="form-frame-0001__right-column__commentary-text">
                    コメンタリーテキスト
                  </div>
                </li>
              </ul>
            </div>
          </li>



          <li class="form-frame-0001__like-tr">
            <div class="form-frame-0001__left-column">
              <ul class="form-frame-0001__left-column__table">
                <li class="form-frame-0001__left-column__tr">
                  <span class="form-frame-0001__left-column__text-wrap">
                    タイトル
                  </span>
                  <span class="form-frame-0001__left-column__tooltip-wrap">
                    <div class="tooltip-0001">
                      <div class="tooltip-0001__contents-wrap">
                        ここにコンテンツを挿入
                      </div>
                      <a class="tooltip-0001__icon" href="#">
                        ?
                      </a>
                    </div>
                  </span>
                  <span class="form-frame-0001__left-column__badge-wrap">
                    必須
                  </span>
                </li>
              </ul>
            </div>
            <div class="form-frame-0001__right-column">
              <ul class="form-frame-0001__right-column__inner-wrap">
                <li class="form-frame-0001__right-column__content-wrap--paragraph-warning">
                  テキストのみが右カラムに入る場合(warning)
                </li>
              </ul>
            </div>
          </li>



          <li class="form-frame-0001__like-tr">
            <div class="form-frame-0001__left-column">
              <ul class="form-frame-0001__left-column__table">
                <li class="form-frame-0001__left-column__tr">
                  <span class="form-frame-0001__left-column__text-wrap">
                    タイトル
                  </span>
                  <span class="form-frame-0001__left-column__tooltip-wrap">
                    <div class="tooltip-0001">
                      <div class="tooltip-0001__contents-wrap">
                        ここにコンテンツを挿入
                      </div>
                      <a class="tooltip-0001__icon" href="#">
                        ?
                      </a>
                    </div>
                  </span>
                  <span class="form-frame-0001__left-column__badge-wrap">
                    必須
                  </span>
                </li>
              </ul>
            </div>
            <div class="form-frame-0001__right-column">
              <ul class="form-frame-0001__right-column__inner-wrap">
                <li class="form-frame-0001__right-column__content-wrap--25-p">
                  <div class="form-type-checkbox-0001">
                    <div class="form-type-checkbox-0001__first-wrap">
                      <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="form-frame-0001__checkbox1">
                      <label class="form-type-checkbox-0001__label-elm" for="form-frame-0001__checkbox1">
                        ラベル文字列
                      </label>
                    </div>
                  </div>
                </li>
                <li class="form-frame-0001__right-column__content-wrap--25-p">
                  <div class="form-type-radio-0001">
                    <div class="form-type-radio-0001__first-wrap">
                      <input class="form-type-radio-0001__input-elm" type="radio" id="form-frame-0001__radio1">
                      <label class="form-type-radio-0001__label-elm" for="form-frame-0001__radio1">
                        ラベル文字列
                      </label>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </li>



        </ul>
      </div>
    </span>
  </div>
</div>





<br><br>

<?php
$modifier_desc = <<<EOT
//---説明文を書くところ(ここから)


要素を全て盛り込んだ状態です。


//---説明文を書くところ(ここまで)
EOT;
$display_sample = <<<EOT
//---表示サンプルHTML(ここから)



<div class="form-frame-0001">
  <div class="form-frame-0001__first-wrap">
    <span class="form-frame-0001__second-wrap">
      <ul class="form-frame-0001__table">


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
            <p class="form-frame-0001__right-cell__example-top">
              例 : example-top
            </p>
            <div class="form-frame-0001__right-cell__field-wrap">
              <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--12">
                <div class="form-type-text-0001 form-type-text-0001--form-height-md">
                  <input class="form-type-text-0001__input-element" type="text">
                </div>
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


      </ul>
    </span>
  </div>
</div>
<br><br><br>


//---表示サンプルHTML(ここまで)
EOT;
$copy_paste_code = <<<EOT
//---コピペ用コード(ここから)


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
    <p class="form-frame-0001__right-cell__example-top">
      例 : example-top
    </p>
    <div class="form-frame-0001__right-cell__field-wrap">
      <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--12">
        <div class="form-type-text-0001 form-type-text-0001--form-height-md">
          <input class="form-type-text-0001__input-element" type="text">
        </div>
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


//---コピペ用コード(ここまで)
EOT;
?>










<?php
$modifier_desc = str_replace('//---説明文を書くところ(ここから)', '', $modifier_desc);
$modifier_desc = str_replace('//---説明文を書くところ(ここまで)', '', $modifier_desc);
$modifier_desc = trim($modifier_desc);
$display_sample = str_replace('//---表示サンプルHTML(ここから)', '', $display_sample);
$display_sample = str_replace('//---表示サンプルHTML(ここまで)', '', $display_sample);
$display_sample = trim($display_sample);
$copy_paste_code = str_replace('//---コピペ用コード(ここから)', '', $copy_paste_code);
$copy_paste_code = str_replace('//---コピペ用コード(ここまで)', '', $copy_paste_code);
$copy_paste_code = str_replace('<', '&lt;', $copy_paste_code);
$copy_paste_code = str_replace('>', '&gt;', $copy_paste_code);
$copy_paste_code = trim($copy_paste_code);
echo $this->SgTable0001->createTr();
echo $this->SgTable0001->descCell();
echo $modifier_desc;
echo $this->SgTable0001->displayCell();
echo $display_sample;
echo $this->SgTable0001->sampleCodeCell();
echo $copy_paste_code;
echo $this->SgTable0001->endTr();
?>

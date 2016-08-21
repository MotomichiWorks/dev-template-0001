<?php
$modifier_desc = <<<EOT
//---説明文を書くところ(ここから)


通常の状態です。<br><br>


//---説明文を書くところ(ここまで)
EOT;
$display_sample = <<<EOT
//---表示サンプルとコピペ用コード(ここから)


<div class="form-frame-0002">
  <div class="form-frame-0002__first-wrap">
    <div class="form-frame-0002__second-wrap">
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
            <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox--log-in">
            <label class="form-type-checkbox-0001__label-elm" for="checkbox--log-in">
              次回からメールアドレスの入力を省略する
            </label>
          </div>
        </div>
      </span>
      <p class="form-frame-0002__text-link-wrap-0001">
        パスワードを忘れた方は<a class="form-frame-0002__text-link-wrap-0001__anc-elm" href="#">こちら</a>
      </p>
      <span class="form-frame-0002__btn-wrap-0001">
        <div class="btn-0001 btn-0001--color-0001 btn-0001--height-lg">
          <a class="btn-0001__clickable-elm" href="#">
            <span class="btn-0001__label">
              ボタンラベル
            </span>
          </a>
          <input class="btn-0001__type-submit-elm" type="submit" name="name" value="value">
        </div>
      </span>
    </div>
  </div>
</div>


//---表示サンプルとコピペ用コード(ここまで)
EOT;
?>










<?php
$modifier_desc = str_replace('//---説明文を書くところ(ここから)', '', $modifier_desc);
$modifier_desc = str_replace('//---説明文を書くところ(ここまで)', '', $modifier_desc);
$modifier_desc = trim($modifier_desc);
$display_sample = str_replace('//---表示サンプルとコピペ用コード(ここから)', '', $display_sample);
$display_sample = str_replace('//---表示サンプルとコピペ用コード(ここまで)', '', $display_sample);
$display_sample = trim($display_sample);
$code_sample = str_replace('<', '&lt;', $display_sample);
$code_sample = str_replace('>', '&gt;', $code_sample);
echo $this->SgTable0001->createTr();
echo $this->SgTable0001->descCell();
echo $modifier_desc;
echo $this->SgTable0001->displayCell();
echo $display_sample;
echo $this->SgTable0001->sampleCodeCell();
echo $code_sample;
echo $this->SgTable0001->endTr();
?>

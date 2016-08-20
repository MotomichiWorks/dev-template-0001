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
      <div class="form-frame-0001__third-wrap">
        <ul class="form-frame-0001__like-table">


          <li class="form-frame-0001__like-tr">
            <div class="form-frame-0001__left-column">
              <ul class="form-frame-0001__left-column__table">
                <li class="form-frame-0001__left-column__tr">
                  <span class="form-frame-0001__left-column__text-wrap">
                    タイトル
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


        </ul>
      </div>
    </span>
  </div>
</div>



//---表示サンプルHTML(ここまで)
EOT;
$copy_paste_code = <<<EOT
//---コピペ用コード(ここから)


<li class="form-frame-0001__like-tr">
  <div class="form-frame-0001__left-column">
    <ul class="form-frame-0001__left-column__table">
      <li class="form-frame-0001__left-column__tr">
        <span class="form-frame-0001__left-column__text-wrap">
          タイトル
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

<?php
$modifier_desc = <<<EOT
//---説明文を書くところ(ここから)


エラー表示の状態です。<br><br>

input要素にform-type-radio-0001__input-elm--errorクラスを付与すると赤くなります。


//---説明文を書くところ(ここまで)
EOT;
$display_sample = <<<EOT
//---表示サンプルとコピペ用コード(ここから)


<div class="form-type-radio-0001">
  <div class="form-type-radio-0001__first-wrap">
    <input class="form-type-radio-0001__input-elm form-type-radio-0001__input-elm--error" type="radio" id="radio-error">
    <label class="form-type-radio-0001__label-elm" for="radio-error">
      ラベル文字列
    </label>
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
echo $this->SgTable0001->createTr();
echo $this->SgTable0001->descCell();
echo $modifier_desc;
echo $this->SgTable0001->displayCell();
echo $display_sample;
echo $this->SgTable0001->sampleCodeCell();
echo $display_sample;
echo $this->SgTable0001->endTr();
?>

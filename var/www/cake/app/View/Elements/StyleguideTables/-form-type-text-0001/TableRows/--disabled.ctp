<?php
$modifier_desc = <<<EOT
//---説明文を書くところ(ここから)


disabled表示の状態です。<br><br>

input要素にdisabled属性を付与すると色も変わります。


//---説明文を書くところ(ここまで)
EOT;
$display_sample = <<<EOT
//---表示サンプルとコピペ用コード(ここから)


<div class="form-type-text-0001 form-type-text-0001--form-height-m">
  <input class="form-type-text-0001__input-element" type="text" disabled>
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

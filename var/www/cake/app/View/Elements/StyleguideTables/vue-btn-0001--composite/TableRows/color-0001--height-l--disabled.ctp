<?php
$modifier_desc = <<<EOT
//---説明文を書くところ(ここから)


disabledのボタンです。<br><br>

:is-disabled="true" 属性を付与することでdisabledになり、クリックも無効になります。


//---説明文を書くところ(ここまで)
EOT;
$display_sample = <<<EOT
//---表示サンプルとコピペ用コード(ここから)


<vue-btn-0001
  :txt="{main: 'ボタンラベル'}"
  :modifier="{color: 'btn-0001--color-0001', height: 'btn-0001--height-l'}"
  :is-disabled="true"
  :btn-type="'composite'"
  :input-name="'hoge'" />


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

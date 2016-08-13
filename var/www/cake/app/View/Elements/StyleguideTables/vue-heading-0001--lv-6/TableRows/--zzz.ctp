<?php
$modifier_desc = <<<EOT
//---説明文を書くところ(ここから)


全ての要素をONにしたバージョンです。<br><br>


//---説明文を書くところ(ここまで)
EOT;
$display_sample = <<<EOT
//---表示サンプルとコピペ用コード(ここから)


<vue-heading-0001
  :txt="{main: '見出し 見出し 見出し', sub: '見出し小 見出し小 見出し小'}"
  :modifier="{lv: 'heading-0001--lv-6'}"
  :tag-name="'h6'"
  :has-icon="true"
  :has-btn="true"
  :btn-txt="{main: 'ボタンラベル'}"
  :btn-modifier="{color: 'btn-0001--color-0001', height: 'btn-0001--height-s'}"
  :btn-btn-type="'a'"
  :btn-a-href="'http://example.com'"
  :btn-input-name="'sample-name'"
  :btn-is-disabled="false" />


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

<?php
$modifier_desc = <<<EOT
//---説明文を書くところ(ここから)


itemsの配列要素数が3つある状態です。<br><br>

aHrefキーの値が1文字以上あるときa要素が表示されます。<br>
空文字列または、aHrefキー自体が無いときはspan要素が表示されます。


//---説明文を書くところ(ここまで)
EOT;
$display_sample = <<<EOT
//---表示サンプルとコピペ用コード(ここから)


<vue-breadcrumb-0001
  :items="[
    {
      txt: 'トップ',
      aHref: '/',
    },
    {
      txt: '第二階層',
      aHref: '#',
    },
    {
      txt: '第三階層',
      aHref: '',
    },
  ]" />


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

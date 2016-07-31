<?php
// modifier説明文
$desc_string = '30度';

// 表示サンプルとコピペ用サンプル
$html_string = <<<EOT
<vue-badge-0001 :obj="{text: '必須', modifier: {color: 'badge-0001--color-0002'}}"></vue-badge-0001>
EOT;
?>





<?php
echo $this->SgTable0001->createTr();
echo $this->SgTable0001->descCell();
//説明文を描画
echo $desc_string;
echo $this->SgTable0001->displayCell();
//表示サンプルを描画
echo $html_string;
echo $this->SgTable0001->sampleCodeCell();
//コピペ用サンプルを描画
echo $html_string;
echo $this->SgTable0001->endTr();
?>

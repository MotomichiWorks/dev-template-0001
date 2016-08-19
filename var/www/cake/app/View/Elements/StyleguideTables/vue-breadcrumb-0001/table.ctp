<?php
  echo $this->SgTable0001->createSection(array('is_deprecated'=>FALSE, 'heading_text'=>$dir_name));
?>


3ステップ, 4ステップ, 5ステップの表示に対応しています。<br><br>

items属性に与える配列要素の数によって、自動で切り替わります。<br><br>

items.isActiveにtrueを設定した要素の色が変化します。


<?php
echo $this->SgTable0001->createTable();
foreach ($obj['tr_list'][$dir_name] as $key => $value) {
  $file_name = str_replace('.ctp', '', $value);
  echo $this->element('StyleguideTables/' . $dir_name . '/TableRows/' . $file_name);
}
echo $this->SgTable0001->endSection();
?>

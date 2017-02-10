<?php
  echo $this->SgTable0001->createSection(array('is_deprecated'=>FALSE, 'heading_text'=>$dir_name));
?>


items属性に与えた配列要素が出力されます。<br><br>

txtキーに設定した文字列がぱんくず文字列として出力されます。<br><br>

aHrefキーに1文字以上の値がある場合はa要素、0文字の場合はspan要素が出力されます。


<?php
echo $this->SgTable0001->createTable();
foreach ($obj['tr_list'][$dir_name] as $key => $value) {
  $file_name = str_replace('.ctp', '', $value);
  echo $this->element('StyleguideTables/' . $dir_name . '/TableRows/' . $file_name);
}
echo $this->SgTable0001->endSection();
?>

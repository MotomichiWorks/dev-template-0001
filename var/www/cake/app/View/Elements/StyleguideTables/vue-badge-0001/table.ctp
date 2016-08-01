<?php
  echo $this->SgTable0001->createSection(array('is_deprecated'=>FALSE, 'heading_text'=>$dir_name));
?>

バッヂに表示させる文字列と色が引数で変更できます。<br>
色相を0度から30度刻みで変化させています。



<?php
echo $this->SgTable0001->createTable();
foreach ($obj['tr_list'][$dir_name] as $key => $value) {
  $file_name = str_replace('.ctp', '', $value);
  echo $this->element('StyleguideTables/' . $dir_name . '/TableRows/' . $file_name);
}
echo $this->SgTable0001->endSection();
?>

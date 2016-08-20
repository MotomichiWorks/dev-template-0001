<?php
  echo $this->SgTable0001->createSection(array('is_deprecated'=>FALSE, 'heading_text'=>$dir_name));
?>


form-frame-0001 の枠の部分です。<br><br>

この中に form-frame-0001__like-tr を入れて使用します。


<?php
echo $this->SgTable0001->createTable();
foreach ($obj['tr_list'][$dir_name] as $key => $value) {
  $file_name = str_replace('.ctp', '', $value);
  echo $this->element('StyleguideTables/' . $dir_name . '/TableRows/' . $file_name);
}
echo $this->SgTable0001->endSection();
?>

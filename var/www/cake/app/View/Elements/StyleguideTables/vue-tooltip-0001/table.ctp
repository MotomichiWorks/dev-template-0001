<?php
  echo $this->SgTable0001->createSection(array('is_deprecated'=>FALSE, 'heading_text'=>$dir_name));
?>


ツールチップとして表示させるコンテンツを、contents属性にHTMLで設定できます。


<?php
echo $this->SgTable0001->createTable();
foreach ($obj['tr_list'][$dir_name] as $key => $value) {
  $file_name = str_replace('.ctp', '', $value);
  echo $this->element('StyleguideTables/' . $dir_name . '/TableRows/' . $file_name);
}
echo $this->SgTable0001->endSection();
?>

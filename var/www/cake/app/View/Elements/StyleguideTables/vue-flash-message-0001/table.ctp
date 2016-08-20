<?php
  echo $this->SgTable0001->createSection(array('is_deprecated'=>FALSE, 'heading_text'=>$dir_name));
?>


slot="slot-0001" 属性を付与することでフラッシュメッセージとして表示させたい要素を挿入できます。


<?php
echo $this->SgTable0001->createTable();
foreach ($obj['tr_list'][$dir_name] as $key => $value) {
  $file_name = str_replace('.ctp', '', $value);
  echo $this->element('StyleguideTables/' . $dir_name . '/TableRows/' . $file_name);
}
echo $this->SgTable0001->endSection();
?>

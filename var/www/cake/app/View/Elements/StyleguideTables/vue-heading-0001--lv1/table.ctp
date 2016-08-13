<?php
  echo $this->SgTable0001->createSection(array('is_deprecated'=>FALSE, 'heading_text'=>$dir_name));
?>


a要素のボタンです。<br>
ボタンのheightはスタイルガイドから省いて一つだけにしていますが、以下の三種類のmodifierが用意されています。<br><br>

btn-0001__height-s<br>
btn-0001__height-m<br>
btn-0001__height-l<br>


<?php
echo $this->SgTable0001->createTable();
foreach ($obj['tr_list'][$dir_name] as $key => $value) {
  $file_name = str_replace('.ctp', '', $value);
  echo $this->element('StyleguideTables/' . $dir_name . '/TableRows/' . $file_name);
}
echo $this->SgTable0001->endSection();
?>

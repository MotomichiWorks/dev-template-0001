<?php
  echo $this->SgTable0001->createSection(array('is_deprecated'=>FALSE, 'heading_text'=>$dir_name));
?>

input要素のボタンです。<br>

ボタンのheightはスタイルガイドから省いて一つだけにしていますが、以下の四種類のmodifierが用意されています。<br><br>

btn-0001__height-xs<br>
btn-0001__height-sm<br>
btn-0001__height-md<br>
btn-0001__height-lg<br>



<?php
echo $this->SgTable0001->createTable();
foreach ($obj['tr_list'][$dir_name] as $key => $value) {
  $file_name = str_replace('.ctp', '', $value);
  echo $this->element('StyleguideTables/' . $dir_name . '/TableRows/' . $file_name);
}
echo $this->SgTable0001->endSection();
?>

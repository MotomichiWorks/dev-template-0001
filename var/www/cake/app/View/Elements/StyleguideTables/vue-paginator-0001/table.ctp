<?php
  echo $this->SgTable0001->createSection(array('is_deprecated'=>FALSE, 'heading_text'=>$dir_name));
?>


以下のangularUtilsのpaginationに適合するようにマークアップしたものなので不本意です。<br><br>

<a href="http://motomichi-works.hatenablog.com/entry/2016/01/18/153827">
  http://motomichi-works.hatenablog.com/entry/2016/01/18/153827
</a>
<br><br>

ページネーターは時間があったら自分で作るか、また探すか。<br><br>

これはレイアウトのサンプルなのでvue.jsできちんと動くところまで作っていません。

<?php
echo $this->SgTable0001->createTable();
foreach ($obj['tr_list'][$dir_name] as $key => $value) {
  $file_name = str_replace('.ctp', '', $value);
  echo $this->element('StyleguideTables/' . $dir_name . '/TableRows/' . $file_name);
}
echo $this->SgTable0001->endSection();
?>

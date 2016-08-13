<?php
  echo $this->SgTable0001->createSection(array('is_deprecated'=>FALSE, 'heading_text'=>$dir_name));
?>


見た目上、レベル6のデザインの見出しです。<br>
:modifier="{lv: 'heading-0001--lv-6'}" 属性と値を設定することでこの見た目になります。<br>
tag-name属性を'h1', 'h2', 'h3', 'h4', 'h5', 'h6', に設定することで、見た目をそのままに、出力されるタグを変更することができます。<br><br>

アイコン、サブタイトル、ボタンを属性で追加することができます。


<?php
echo $this->SgTable0001->createTable();
foreach ($obj['tr_list'][$dir_name] as $key => $value) {
  $file_name = str_replace('.ctp', '', $value);
  echo $this->element('StyleguideTables/' . $dir_name . '/TableRows/' . $file_name);
}
echo $this->SgTable0001->endSection();
?>

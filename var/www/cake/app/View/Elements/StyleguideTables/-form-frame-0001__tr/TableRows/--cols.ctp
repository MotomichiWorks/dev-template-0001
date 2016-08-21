<?php
$modifier_desc = <<<EOT
//---説明文を書くところ(ここから)

右の表示サンプルは<br>
25%ずつの幅で要素を配置した状態です。<br><br>

bootstrapのグリッドのように、以下の12種類のmodifierで幅を制御できます。<br><br>

form-frame-0001__right-cell__field-col--1<br>
form-frame-0001__right-cell__field-col--2<br>
form-frame-0001__right-cell__field-col--3<br>
form-frame-0001__right-cell__field-col--4<br>
form-frame-0001__right-cell__field-col--5<br>
form-frame-0001__right-cell__field-col--6<br>
form-frame-0001__right-cell__field-col--7<br>
form-frame-0001__right-cell__field-col--8<br>
form-frame-0001__right-cell__field-col--9<br>
form-frame-0001__right-cell__field-col--10<br>
form-frame-0001__right-cell__field-col--11<br>
form-frame-0001__right-cell__field-col--12<br><br>

modifierを付与しない場合は内包する要素幅に応じて伸び縮みします。

//---説明文を書くところ(ここまで)
EOT;
$display_sample = <<<EOT
//---表示サンプルHTML(ここから)


<div class="form-frame-0001">
  <div class="form-frame-0001__first-wrap">
    <span class="form-frame-0001__second-wrap">
      <ul class="form-frame-0001__table">


        <li class="form-frame-0001__tr">
          <div class="form-frame-0001__left-cell">
            <p class="form-frame-0001__left-cell__heading-wrap">
              タイトル タイトル タイトル
            </p>
            <div class="form-frame-0001__left-cell__badge-wrap">
              <vue-badge-0001
                :txt="{main: '必須'}"
                :modifier="{color: 'badge-0001--color-0001'}" />
            </div>
          </div>
          <div class="form-frame-0001__right-cell">
            <div class="form-frame-0001__right-cell__field-wrap">
              <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
                <div class="form-type-checkbox-0001">
                  <div class="form-type-checkbox-0001__first-wrap">
                    <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox--form-frame-0001-1">
                    <label class="form-type-checkbox-0001__label-elm" for="checkbox--form-frame-0001-1">
                      ラベル文字列
                    </label>
                  </div>
                </div>
              </span>
              <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
                <div class="form-type-checkbox-0001">
                  <div class="form-type-checkbox-0001__first-wrap">
                    <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox--form-frame-0001-2">
                    <label class="form-type-checkbox-0001__label-elm" for="checkbox--form-frame-0001-2">
                      ラベル文字列
                    </label>
                  </div>
                </div>
              </span>
              <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
                <div class="form-type-checkbox-0001">
                  <div class="form-type-checkbox-0001__first-wrap">
                    <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox--form-frame-0001-3">
                    <label class="form-type-checkbox-0001__label-elm" for="checkbox--form-frame-0001-3">
                      ラベル文字列
                    </label>
                  </div>
                </div>
              </span>
              <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
                <div class="form-type-checkbox-0001">
                  <div class="form-type-checkbox-0001__first-wrap">
                    <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox--form-frame-0001-4">
                    <label class="form-type-checkbox-0001__label-elm" for="checkbox--form-frame-0001-4">
                      ラベル文字列
                    </label>
                  </div>
                </div>
              </span>
              <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
                <div class="form-type-checkbox-0001">
                  <div class="form-type-checkbox-0001__first-wrap">
                    <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox--form-frame-0001-5">
                    <label class="form-type-checkbox-0001__label-elm" for="checkbox--form-frame-0001-5">
                      ラベル文字列
                    </label>
                  </div>
                </div>
              </span>
              <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
                <div class="form-type-checkbox-0001">
                  <div class="form-type-checkbox-0001__first-wrap">
                    <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox--form-frame-0001-6">
                    <label class="form-type-checkbox-0001__label-elm" for="checkbox--form-frame-0001-6">
                      ラベル文字列
                    </label>
                  </div>
                </div>
              </span>
            </div>
          </div>
        </li>


      </ul>
    </span>
  </div>
</div>


//---表示サンプルHTML(ここまで)
EOT;
$copy_paste_code = <<<EOT
//---コピペ用コード(ここから)


<li class="form-frame-0001__tr">
  <div class="form-frame-0001__left-cell">
    <p class="form-frame-0001__left-cell__heading-wrap">
      タイトル タイトル タイトル
    </p>
    <div class="form-frame-0001__left-cell__badge-wrap">
      <vue-badge-0001
        :txt="{main: '必須'}"
        :modifier="{color: 'badge-0001--color-0001'}" />
    </div>
  </div>
  <div class="form-frame-0001__right-cell">
    <div class="form-frame-0001__right-cell__field-wrap">
      <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
        <div class="form-type-checkbox-0001">
          <div class="form-type-checkbox-0001__first-wrap">
            <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox">
            <label class="form-type-checkbox-0001__label-elm" for="checkbox">
              ラベル文字列
            </label>
          </div>
        </div>
      </span>
      <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
        <div class="form-type-checkbox-0001">
          <div class="form-type-checkbox-0001__first-wrap">
            <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox">
            <label class="form-type-checkbox-0001__label-elm" for="checkbox">
              ラベル文字列
            </label>
          </div>
        </div>
      </span>
      <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
        <div class="form-type-checkbox-0001">
          <div class="form-type-checkbox-0001__first-wrap">
            <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox">
            <label class="form-type-checkbox-0001__label-elm" for="checkbox">
              ラベル文字列
            </label>
          </div>
        </div>
      </span>
      <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
        <div class="form-type-checkbox-0001">
          <div class="form-type-checkbox-0001__first-wrap">
            <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox">
            <label class="form-type-checkbox-0001__label-elm" for="checkbox">
              ラベル文字列
            </label>
          </div>
        </div>
      </span>
      <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
        <div class="form-type-checkbox-0001">
          <div class="form-type-checkbox-0001__first-wrap">
            <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox">
            <label class="form-type-checkbox-0001__label-elm" for="checkbox">
              ラベル文字列
            </label>
          </div>
        </div>
      </span>
      <span class="form-frame-0001__right-cell__field-col form-frame-0001__right-cell__field-col--3">
        <div class="form-type-checkbox-0001">
          <div class="form-type-checkbox-0001__first-wrap">
            <input class="form-type-checkbox-0001__input-elm" type="checkbox" id="checkbox">
            <label class="form-type-checkbox-0001__label-elm" for="checkbox">
              ラベル文字列
            </label>
          </div>
        </div>
      </span>
    </div>
  </div>
</li>



//---コピペ用コード(ここまで)
EOT;
?>










<?php
$modifier_desc = str_replace('//---説明文を書くところ(ここから)', '', $modifier_desc);
$modifier_desc = str_replace('//---説明文を書くところ(ここまで)', '', $modifier_desc);
$modifier_desc = trim($modifier_desc);
$display_sample = str_replace('//---表示サンプルHTML(ここから)', '', $display_sample);
$display_sample = str_replace('//---表示サンプルHTML(ここまで)', '', $display_sample);
$display_sample = trim($display_sample);
$copy_paste_code = str_replace('//---コピペ用コード(ここから)', '', $copy_paste_code);
$copy_paste_code = str_replace('//---コピペ用コード(ここまで)', '', $copy_paste_code);
$copy_paste_code = str_replace('<', '&lt;', $copy_paste_code);
$copy_paste_code = str_replace('>', '&gt;', $copy_paste_code);
$copy_paste_code = trim($copy_paste_code);
echo $this->SgTable0001->createTr();
echo $this->SgTable0001->descCell();
echo $modifier_desc;
echo $this->SgTable0001->displayCell();
echo $display_sample;
echo $this->SgTable0001->sampleCodeCell();
echo $copy_paste_code;
echo $this->SgTable0001->endTr();
?>

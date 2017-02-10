<?php
$modifier_desc = <<<EOT
//---説明文を書くところ(ここから)


通常の状態です。<br><br>


//---説明文を書くところ(ここまで)
EOT;
$display_sample = <<<EOT
//---表示サンプルとコピペ用コード(ここから)


<div class="table-like-0001">
  <div class="table-like-0001__first-wrap">
    <span class="table-like-0001__second-wrap">
      <ul class="table-like-0001__table">
        <li class="table-like-0001__tr">
          <div class="table-like-0001__th-0001">
            <span class="table-like-0001__th-inner">
              タグ
            </span>
          </div>
          <div class="table-like-0001__th-0002">
            <span class="table-like-0001__th-inner">
              編集
            </span>
          </div>
          <div class="table-like-0001__th-0002">
            <span class="table-like-0001__th-inner">
              削除
            </span>
          </div>
        </li>
        <li class="table-like-0001__tr">
          <div class="table-like-0001__td-0001">
            <span class="table-like-0001__td-inner">
              <div class="table-like-0001__td-inner__box-100-p">
                <div class="table-like-0001__text-wrap">
                  xhtml
                </div>
              </div>
            </span>
          </div>
          <div class="table-like-0001__td-0002">
            <span class="table-like-0001__td-inner">
              <div class="table-like-0001__td-inner__box-75-p">
                <div class="form-type-text-0001 form-type-text-0001--form-height-m">
                  <input class="form-type-text-0001__input-element" type="text">
                </div>
              </div>
              <div class="table-like-0001__td-inner__box-25-p">
                <div class="table-like-0001__text-wrap">
                  <a class="table-like-0001__anc-elm" href="#">
                    編集
                  </a>
                </div>
              </div>
              <div class="table-like-0001__td-inner__box-100-p">
                <p class="table-like-0001__warning-text ng-binding ng-scope" ng-if="item.errors.text[0]">
                  エラーメッセージ
                </p>
              </div>
            </span>
          </div>
          <div class="table-like-0001__td-0002">
            <span class="table-like-0001__td-inner">
              <div class="table-like-0001__td-inner__box-100-p">
                <div class="table-like-0001__text-wrap">
                  <a class="table-like-0001__anc-elm" href="#">
                    削除
                  </a>
                </div>
              </div>
            </span>
          </div>
        </li>
        <li class="table-like-0001__tr">
          <div class="table-like-0001__td-0001">
            <span class="table-like-0001__td-inner">
              <div class="table-like-0001__td-inner__box-100-p">
                <div class="table-like-0001__text-wrap">
                  html5
                </div>
              </div>
            </span>
          </div>
          <div class="table-like-0001__td-0002">
            <span class="table-like-0001__td-inner">
              <div class="table-like-0001__td-inner__box-75-p">
                <div class="form-type-text-0001 form-type-text-0001--form-height-m">
                  <input class="form-type-text-0001__input-element" type="text">
                </div>
              </div>
              <div class="table-like-0001__td-inner__box-25-p">
                <div class="table-like-0001__text-wrap">
                  <a class="table-like-0001__anc-elm" href="#">
                    編集
                  </a>
                </div>
              </div>
              <div class="table-like-0001__td-inner__box-100-p">
                <p class="table-like-0001__notes-text ng-binding ng-scope" ng-if="item.errors.text[0]">
                  説明文
                </p>
              </div>
            </span>
          </div>
          <div class="table-like-0001__td-0002">
            <span class="table-like-0001__td-inner">
              <!-- ngIf: !item.ajaxResponse -->
              <div class="table-like-0001__td-inner__box-100-p">
                <div class="table-like-0001__text-wrap">
                  <a class="table-like-0001__anc-elm" href="#">
                    削除
                  </a>
                </div>
              </div>
            </span>
          </div>
        </li>
      </ul>
    </span>
  </div>
</div>


//---表示サンプルとコピペ用コード(ここまで)
EOT;
?>










<?php
$modifier_desc = str_replace('//---説明文を書くところ(ここから)', '', $modifier_desc);
$modifier_desc = str_replace('//---説明文を書くところ(ここまで)', '', $modifier_desc);
$modifier_desc = trim($modifier_desc);
$display_sample = str_replace('//---表示サンプルとコピペ用コード(ここから)', '', $display_sample);
$display_sample = str_replace('//---表示サンプルとコピペ用コード(ここまで)', '', $display_sample);
$display_sample = trim($display_sample);
$code_sample = str_replace('<', '&lt;', $display_sample);
$code_sample = str_replace('>', '&gt;', $code_sample);
echo $this->SgTable0001->createTr();
echo $this->SgTable0001->descCell();
echo $modifier_desc;
echo $this->SgTable0001->displayCell();
echo $display_sample;
echo $this->SgTable0001->sampleCodeCell();
echo $code_sample;
echo $this->SgTable0001->endTr();
?>

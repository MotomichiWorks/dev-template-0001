import jquery from 'jquery';
import React from 'react';
import ReactDom from 'react-dom';
import Hoge from './child/react-components/hoge';
import Foo from './child/jq-components/foo';

ReactDom.render(<Hoge />, document.getElementById('example'));

// angular
// angular = require('./child/lib/angular.min');

// require('./child/ng-app/ng-app');

// jQuery
// jQuery = require('./child/lib/jquery-1.11.3.min');

// captchaの画像を更新するjs
// require('./child/utility/captcha-reload');

// articlesテーブルのデータをJSONで取得するjs
// require('./child/utility/article.delete');

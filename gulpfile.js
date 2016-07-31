/************************************************
 * コマンドラインから実行するtaskとその概要
 ************************************************/

 /**
  * コマンド : gulp watch
  *     - build
  *         - scssファイルをsassでコンパイル
  *         - cssファイルを結合して、webrootにdest
  */

 /**
  * コマンド : gulp smith
  *     - spritesmithを実行して、scssとpngを生成
  */

  /**
   * コマンド : gulp lint
   *     - jsの文法チェック
   */



/************************************************
 * モジュール読み込み
 ************************************************/
var gulp         = require('gulp');
var fs           = require('fs');
var rubysass     = require('gulp-ruby-sass');
var cleanCSS     = require('gulp-clean-css');
var spritesmith  = require('gulp.spritesmith');
var mergeStream  = require('merge-stream');
var concat       = require('gulp-concat');
var eslint       = require('gulp-eslint');
var autoprefixer = require('gulp-autoprefixer');



/************************************************
 * path設定
 ************************************************/
var SPRITE__SRC__PATH         = './src/css-scss-img/img/src-img';
var SPRITE__RESULT__SCSS_PATH = './src/css-scss-img/scss/src-common-scss/child';
var SPRITE__RESULT__IMG_PATH  = './var/www/webroot/assets/img';
var SASS__SRC__PATH           = './src/css-scss-img/scss/src-scss';
var SASS__RESULT__PATH        = './src/css-scss-img/css/src-css';
var MINIFY_CSS__SRC__PATH     = SASS__RESULT__PATH;
var MINIFY_CSS__RESULT__PATH  = './var/www/webroot/assets/css'; // 完成品のCSSが出力されるディレクトリ
var GULP_WATCH__PATH          = './src/css-scss-img/**/*.*';



/************************************************
 * tasks
 ************************************************/

/**
 * minifyCss
 *
 * filePathSuffixList {Array}
 * fileName {String}
 * @return {Object} gulpストリーム
 */
var minifyCss = function (filePathSuffixList, fileName) {
  var filePathList = [];

  filePathSuffixList.forEach(function(filePathItem){
    filePathList.push(MINIFY_CSS__SRC__PATH + filePathItem);
  });

  var stream = gulp.src(filePathList)
    .pipe(concat(fileName))
    .pipe(autoprefixer({
      browsers: [
        // 'iOS 7',
        // 'Android 2.3',
        // 'not ie <= 8',
        'last 2 versions'
      ]
    }))
    .pipe(cleanCSS({
      compatibility: 'ie8'
    }))
    .pipe(gulp.dest(MINIFY_CSS__RESULT__PATH));

  return stream;
}

/**
 * SASS__SRC__PATH をトリガーとして監視するタスク
 *
 * @return {Object} gulp ストリーム
 */
gulp.task('watch', function() {
  gulp.watch(GULP_WATCH__PATH,['build'])
    .on('change', function(event){
      eventObj = event;
    });
});



/**
 * sprite画像を作成して、それに対応するscssファイルを生成するタスク
 *
 * @return {Object} gulp ストリーム
 */
gulp.task('smith', function() {
  console.log("spritesmithを実行します。");
  var spriteData = gulp.src(SPRITE__SRC__PATH + '/*.png') //スプライトにする画像素材
  .pipe(spritesmith({
    imgName         : 'sprite.png', //スプライト画像のファイル名
    imgPath         : '/assets/img/sprite.png', //生成されるscssに記載されるパス
    retinaImgPath   : '/assets/img/sprite-2x.png',
    retinaSrcFilter : SPRITE__SRC__PATH + '/*-2x.png',
    retinaImgName   : 'sprite-2x.png',
    cssName         : 'grandson/_mixin__bg-image__spritesmith.scss', //生成されるscss
    cssFormat       : 'scss', //フォーマット
    padding         : 10,
    algorithm       : 'top-down',
    // 生成されるscss内の変数を少し編集
    cssVarMap : function (sprite) {
      sprite.name = 'sprite-' + sprite.name;
    }
  }));
  //画像を保存
  var imgStream = spriteData.img
    // .pipe(imagemin())
    .pipe(gulp.dest( SPRITE__RESULT__IMG_PATH + '/'));
  //scssを保存
  var cssStream = spriteData.css
    .pipe(gulp.dest( SPRITE__RESULT__SCSS_PATH + '/'));
});



/**
 * 以下二つの役割を持ったタスクです。
 *
 * - scssをコンパイルする
 * - cssを結合して、style.cssを作り出す
 *
 * @return {Object} gulp ストリーム
 */
gulp.task('build',function (callback){
  var _group;
  console.log('eventObj.typeは'+eventObj.type);//イベントタイプを出力(chenged,added,deletedなど)
  console.log('eventObj.pathは'+eventObj.path);//イベントパスを出力

  //src-common-scss/*.scssが変更されたときに全てのscssをコンパイル
  if(eventObj.path.match('src-common-scss')){
    console.log("scssを全てコンパイルします。");

    var srcDirList = fs.readdirSync (SASS__SRC__PATH);
    var srcFileList = [];
    var filePath;

    srcDirList.forEach(function(dirName){
      srcFileList = fs.readdirSync (SASS__SRC__PATH + '/' + dirName);
      srcFileList.forEach(function(fileName){
        filePath = SASS__SRC__PATH + '/' + dirName + '/' + fileName;
        rubysass(filePath)
          .on('error', function (err) {
            console.error('Error!', err.message);
          })
          .pipe(gulp.dest(SASS__RESULT__PATH + '/' + dirName + '/'));
      });
    });

    callback();
  }
  //src-scss/*.scssが変更されたときに当該のファイルだけをコンパイル
  else if(eventObj.path.match('src-scss')){
    _group = eventObj.path.match(/group\-[0-9]{4}\_\_[a-z]+/);
    console.log(_group+"scssを単品コンパイルします。");
    return rubysass(eventObj.path)
      .on('error', function (err) {
        console.error('Error!', err.message);
      })
      .pipe(gulp.dest(SASS__RESULT__PATH + '/' + _group + '/'));
  }
  //style.cssを生成
  else if(eventObj.path.match('src-css')){
    console.log("style1.css, style2.css, styleguide.css, を生成します。");

    // srcディレクトリを設定
    var srcPathSuffixObj = {
      list1: [
        '/group-0001__before/*.css'
      ],
      list2: [
        '/group-0002__layout/*.css',
        '/group-0003__module/*.css',
        '/group-0004__module/*.css',
        '/group-0099__after/*.css'
      ],
      list3: [
        '/group-0100__styleguide/*.css'
      ]
    };

    // style1.css, style2.cssを生成
    var stream1 = minifyCss(srcPathSuffixObj.list1, 'style1.css');
    var stream2 = minifyCss(srcPathSuffixObj.list2, 'style2.css');
    var streamStyleguide = minifyCss(srcPathSuffixObj.list3, 'styleguide.css');

    // streamをマージ
    var merged = mergeStream(stream1, stream2, streamStyleguide);

    // streamをreturn
    return merged;
  }
  else{
    callback();
  }
});



/**
 * jsの文法チェックをするタスク
 *
 * @return {Object} gulp ストリーム
 */
gulp.task('lint', function() {
  return gulp.src([
      './src/js/main.js',
      './src/js/child/react-components/*.js',
      './src/js/child/jq-components/*.js'
    ])
    .pipe(eslint({useEslintrc: true}))
    .pipe(eslint.format())
    .pipe(eslint.failAfterError());
});

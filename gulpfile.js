/************************************************
 * コマンドラインから実行するtaskとその概要
 ************************************************/
 /**
  * コマンド : gulp browserify
  *     - jscompile()を実行
  */

 /**
  * コマンド : gulp watch
  *     - watchify
  *         - JS__SRC__PATHの変更をトリガーにして、jscompile()を実行
  *     - build
  *         - scssファイルをsassでコンパイル
  *         - cssファイルを結合して、webrootにdest
  */

 /**
  * コマンド : gulp smith
  *     - spritesmithを実行して、scssとpngを生成
  */



/************************************************
 * モジュール読み込み
 ************************************************/
var gulp        = require( 'gulp' );
var babel       = require('gulp-babel');
var sourcemaps  = require('gulp-sourcemaps');
var browserify  = require( 'browserify' );
var watchify    = require( 'watchify' );
var babelify    = require('babelify');
var uglify      = require( 'gulp-uglify' );
var source      = require( 'vinyl-source-stream' );
var buffer      = require( 'vinyl-buffer' );
var rubysass    = require( 'gulp-ruby-sass' );
var cleanCSS    = require('gulp-clean-css');
var spritesmith = require( 'gulp.spritesmith' );
var mergeStream = require( 'merge-stream' );
var concat      = require( 'gulp-concat' );
var eslint      = require('gulp-eslint');
var autoprefixer = require('gulp-autoprefixer');
// var rename      = require( 'gulp-rename' );



/************************************************
 * path設定
 ************************************************/
var SPRITE__SRC__PATH         = './src/css-scss-img/img/src-img';
var SPRITE__RESULT__SCSS_PATH = './src/css-scss-img/scss/src-common-scss/child';
var SPRITE__RESULT__IMG_PATH  = './webroot/assets/img';
var SASS__SRC__PATH           = './src/css-scss-img/scss/src-scss';
var SASS__RESULT__PATH        = './src/css-scss-img/css/src-css';
var MINIFY_CSS__SRC__PATH     = SASS__RESULT__PATH;
var MINIFY_CSS__RESULT__PATH  = './var/www/webroot/assets/css'; // 完成品のCSSが出力されるディレクトリ
var JS__SRC__PATH             = './src/js';
var JS__RESULT__PATH          = './var/www/webroot/assets/js'; // 完成品のJSが出力されるディレクトリ
var GULP_WATCH__PATH          = './src/css-scss-img/**/*.*';



/************************************************
 * tasks
 ************************************************/

/**
 * JS__SRC__PATHに対するコンパイルを一回実行するタスク
 *
 * @return {Object} gulp ストリーム
 */
gulp.task('browserify',function(){
  return jscompile(false);//引数がfalseなので監視しない
});

/**
 * JS__SRC__PATHを監視して、JS__SRC__PATHに対するコンパイルを繰り返し実行するタスク
 *
 * @return {Object} gulp ストリーム
 */
gulp.task('watchify',function(){
  return jscompile(true);//引数がtrueなので監視する
});

// jscompile関数を定義
function jscompile(is_watch){
  // 変数bundlerにwatchify()またはbrowserify()を格納
  var bundler;
  if(is_watch){
    bundler = watchify(browserify(JS__SRC__PATH + '/main.js'));
  }else{
    bundler = browserify(JS__SRC__PATH + '/main.js');
  }
  //関数rebundleを定義
  function rebundle(){
    return bundler
      .transform(babelify, {"presets": ["es2015", "react"]})
      .bundle()
      .on('error', function (err) { console.log('Error : ' + err.message); })
      .pipe(source('main.js'))
      .pipe(buffer())
      // .pipe(uglify())
      .pipe(gulp.dest(JS__RESULT__PATH));
    }
    bundler.on('update',function(){
      rebundle();
    });
    bundler.on('log',function(message){
      console.log( message );
    });
    return rebundle();
  }

/**
 * SASS__SRC__PATH JS__SRC__PATHをトリガーとして監視するタスク
 * scssの監視は、gulp.watchで監視
 * jsの監視は、watchify+browserifyで監視
 *
 * @return {Object} gulp ストリーム
 */
gulp.task('watch',['watchify'], function() {
  gulp.watch(GULP_WATCH__PATH,['build'])
    .on('change', function(event){
      eventObj = event;
    });
});



/**
 * 以下の役割を持ったタスクです。
 *
 * - sprite画像を作成して、それに対応するscssファイルを生成する
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
    return rubysass( SASS__SRC__PATH + '/')
      .on('error', function (err) {
        console.error('Error!', err.message);
      })
      .pipe(gulp.dest(SASS__RESULT__PATH + '/'));
  }
  //src-scss/*.scssが変更されたときに当該のファイルだけをコンパイル
  else if(eventObj.path.match('src-scss')){
    _group = eventObj.path.match(/group\-[0-9]{4}\_\_[a-z]+/);
    console.log(_group+"scssを単品コンパイルします。");
    return rubysass(eventObj.path)
      .on('error', function (err) {
        console.error('Error!', err.message);
      })
      .pipe(gulp.dest(SASS__RESULT__PATH + '/' + _group+ '/'));
  }
  //style.cssを生成
  else if(eventObj.path.match('src-css')){
    console.log("style1.css, style2.css, を生成します。");
    // style1を生成
    var stream1 = gulp.src(MINIFY_CSS__SRC__PATH + '/group-0001__before/*.css')
      .pipe(concat('style1.css'))
      .pipe(autoprefixer({
        browsers: ['last 2 versions']
      }))
      .pipe(cleanCSS({
        compatibility: 'ie8'
      }))
      .pipe(gulp.dest(MINIFY_CSS__RESULT__PATH));
    // style2を生成
    var stream2 = gulp.src([
        MINIFY_CSS__SRC__PATH + '/group-0002__layout/*.css',
        MINIFY_CSS__SRC__PATH + '/group-0003__module/*.css',
        MINIFY_CSS__SRC__PATH + '/group-0004__module/*.css',
        MINIFY_CSS__SRC__PATH + '/group-0099__after/*.css'
      ])
      .pipe(concat('style2.css'))
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
    // streamをマージ
    var merged = mergeStream(stream1, stream2);
    // streamをreturn
    return merged;
  }
  else{
    callback();
  }
});

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

const gulp = require('gulp');
const sass = require('gulp-sass'); //Sassコンパイルするため
const autoprefixer = require('gulp-autoprefixer');
const postcss = require('gulp-postcss'); //autoprefixerとセット
const cleanCSS = require('gulp-clean-css'); //コンパイルした css を圧縮するため
const uglify = require('gulp-uglify'); // javascript minify
const rename = require('gulp-rename'); //圧縮したファイル名に.minを追加
const plumber = require('gulp-plumber'); // error handling
const sourcemaps = require('gulp-sourcemaps'); //sourcemaps
const concat = require('gulp-concat'); // JS圧縮
const imagemin = require('gulp-imagemin'); // 画像圧縮
const pngquant = require("imagemin-pngquant"); // 画像圧縮
const mozjpeg = require('imagemin-mozjpeg'); // 画像圧縮
const babel = require('gulp-babel'); // babel
const ejs = require("gulp-ejs");
const replace = require("gulp-replace");
const imageResize = require('gulp-image-resize'); // 画像リサイズ
const pkg = require('./package.json');
const conf = pkg["gulp-config"];
const sizes = conf.sizes;

// ブラウザシンク
const browserSync = require('browser-sync');
/*pages/**/
const sassGlob = require('gulp-sass-glob');

// path設定
const paths = {
  'src': {
    'scss': './src/scss/**/*.scss',
    'images': './src/img/**/*',
    'js': './src/js/**/*.js',
    'copy': [
      './src/**/*.html',
      './src/**/*.php',
    ],
  },
  'dist': {
    'css': './assets/css',
    'img': './assets/img',
    'js': './assets/js',
    'copy': './',
  }
};

// sass コンバイル
gulp.task('sass', done => {
  gulp.src(paths.src.scss)
  // Sassの@importにおけるglobを有効にする
  .pipe(sassGlob())
  .pipe(sourcemaps.init())
  .pipe(sass({
    outputStyle: 'expanded',
  }).on('error', sass.logError))
  .pipe(autoprefixer({ grid: true }))
  .pipe(sourcemaps.write('./'))
  .pipe(gulp.dest(paths.dist.css))
  .pipe(cleanCSS())
  .pipe(rename({
    // suffix: '.min',
  }))
  // .pipe(gulp.dest(paths.dist.css));
  done();
});


gulp.task('sass2', done => {
  gulp.src(paths.src.scss)
  // Sassの@importにおけるglobを有効にする
  .pipe(sassGlob())
  .pipe(sourcemaps.init())
  .pipe(sass({
    outputStyle: 'expanded',
  }).on('error', sass.logError))
  .pipe(autoprefixer({ grid: true }))
  .pipe(sourcemaps.write('./'))
  .pipe(gulp.dest(paths.dist.css))
  done();
});


// ブラウザシンク/
gulp.task('browser-sync', function() {
  browserSync.init({
      server: {
          baseDir: "./"
      }
  });
});

gulp.task( 'bs-reload', function(done) {
browserSync.reload();
done();
});


// 画像圧縮
gulp.task('imagemin', function(){
  return gulp.src(paths.src.images)
    .pipe(plumber())
    .pipe(imagemin([
       pngquant({
         quality: [.7, .85],
         speed: 1,
         floyd:0
       }),
       mozjpeg({
         quality:85,
         progressive: true
       }),
       imagemin.svgo(),
       imagemin.optipng(),
       imagemin.gifsicle()
     ]
  ))
  .pipe(gulp.dest(paths.dist.img));
});


// JS 結合＆圧縮
// JS 結合＆圧縮
gulp.task('jsConcat', function () {
  return gulp.src(paths.src.js)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(babel({
      "presets": ["@babel/preset-env"]
    }))
    .pipe(concat('base.js'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.dist.js))
    .pipe(uglify())
    .pipe(rename({
      extname: '.min.js'
    }))
    .pipe(gulp.dest(paths.dist.js))
});


// scss ファイルを変更し保存する度にコンパイル gulp dev
gulp.task('dev', () => {
  gulp.watch(paths.src.scss, gulp.task('sass'));
  gulp.watch(paths.src.images, gulp.task('imagemin'));
  gulp.watch(paths.src.js, gulp.task('jsConcat'));
});

// 監視
gulp.task('watch', () => {
  gulp.watch( paths.src.scss, gulp.task('sass2') ); //sassが更新されたらgulp sassを実行
  gulp.watch( paths.src.scss, gulp.task('bs-reload')); //sassが更新されたらbs-reloadを実行
  gulp.watch( paths.src.js, gulp.task('bs-reload') ); //jsが更新されたらbs-relaodを実行

  });

// 監視
gulp.task('watch', () => {
  gulp.watch( paths.src.scss, gulp.task('sass') ); //sassが更新されたらgulp sassを実行
  gulp.watch(paths.src.images, gulp.task('imagemin'));
  gulp.watch(paths.src.js, gulp.task('jsConcat'));
  gulp.watch( paths.src.scss, gulp.task('bs-reload')); //sassが更新されたらbs-reloadを実行
  gulp.watch( paths.src.js, gulp.task('bs-reload') ); //jsが更新されたらbs-relaodを実行

  });

// sync
gulp.task('sync', gulp.series(gulp.parallel('browser-sync', 'watch')));



// npm run pro
gulp.task('pro', done => {
  gulp.src(paths.src.scss)
    .pipe(sass({
      outputStyle: 'compressed',
    }).on('error', sass.logError))
    .pipe(autoprefixer({
      grid: true
    }))
    .pipe(cleanCSS())
    .pipe(gulp.dest(paths.dist.css));
  done();
});


// imageResize
gulp.task('faviconResize', done => {
  for (let size of sizes) {
    let width = size[0];
    let height = size[1];

    gulp.src('./src/images/favicon/favicon.jpg')
      .pipe(imageResize({
        width,
        height,
        crop: true,
        upscale: false
      }))
      .pipe(rename(`favicon-${width}x${height}.jpg`))
      .pipe(gulp.dest('./src/images/favicon'));
  }
  done();
});
const gulp                      = require('gulp'),
      del                       = require('del'),
      sourcemaps                = require('gulp-sourcemaps'),
      plumber                   = require('gulp-plumber'),
      sass                      = require('gulp-sass'),
      autoprefixer              = require('gulp-autoprefixer'),
      minifyCss                 = require('gulp-clean-css'),
      babel                     = require('gulp-babel'),
      webpack                   = require('webpack-stream'),
      uglify                    = require('gulp-uglify'),
      concat                    = require('gulp-concat'),
      imagemin                  = require('gulp-imagemin'),
      browserSync               = require('browser-sync').create(),
      dependents                = require('gulp-dependents'),

      app_name                  = 'insaat',

      src_folder                = './src/',
      src_assets_folder         = src_folder + 'assets/',
      dist_folder               = './dist/',
      dist_assets_folder        = dist_folder + 'assets/',
      dist_assets_folder_css    = dist_folder + 'assets/css',
      dist_assets_folder_img    = dist_folder + 'assets/images',
      dist_assets_folder_js     = dist_folder + 'assets/js',
      node_modules_folder       = './node_modules/',
      dist_node_modules_folder  = dist_folder + 'node_modules/',

      node_dependencies         = Object.keys(require('./package.json').dependencies || {});

gulp.task('clear', () => del([ dist_assets_folder_css, dist_assets_folder_img, dist_assets_folder_js ]));

gulp.task('php', () => {
  return gulp.src([ src_folder + '**/*.php' ], {
    base: src_folder,
    since: gulp.lastRun('php')
  })
    .pipe(gulp.dest(dist_folder))
    .pipe(browserSync.stream());
});

gulp.task('sass', () => {
  return gulp.src([
    src_assets_folder + 'sass/**/*.sass',
    src_assets_folder + 'scss/**/*.scss'
  ], { since: gulp.lastRun('sass') })
    .pipe(sourcemaps.init())
      .pipe(plumber())
      .pipe(dependents())
      .pipe(sass({
        outputStyle: 'compact', // nested, expanded, compact, compressed
      }))
      .pipe(autoprefixer())
      // .pipe(minifyCss())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(dist_assets_folder + 'css'))
    .pipe(browserSync.stream());
});

gulp.task('js', () => {
  return gulp.src([ src_assets_folder + 'js/**/*.js' ]/*, { since: gulp.lastRun('js') }*/)
    .pipe(plumber())
    .pipe(webpack({
      mode: 'production',
      performance: {
        hints: false,
        maxAssetSize: 1000000
      }
    }))
    .pipe(sourcemaps.init())
    .pipe(babel({
      presets: [ '@babel/env' ],
      compact: false
    }))
    .pipe(concat('bundle.min.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(dist_assets_folder + 'js'))
    .pipe(browserSync.stream());
});

gulp.task('images', () => {
  return gulp.src([ src_assets_folder + 'images/**/*.+(png|jpg|jpeg|gif|svg|ico)' ], { since: gulp.lastRun('images') })
    .pipe(plumber())
    .pipe(imagemin())
    .pipe(gulp.dest(dist_assets_folder + 'images'))
    .pipe(browserSync.stream());
});

gulp.task('vendor', () => {
  if (node_dependencies.length === 0) {
    return new Promise((resolve) => {
      console.log("No dependencies specified");
      resolve();
    });
  }

  return gulp.src(node_dependencies.map(dependency => node_modules_folder + dependency + '/**/*.*'), {
    base: node_modules_folder,
    since: gulp.lastRun('vendor')
  })
    .pipe(gulp.dest(dist_node_modules_folder))
    .pipe(browserSync.stream());
});

gulp.task('build', gulp.series('clear', 'php', 'sass', 'js', 'images', 'vendor'));

gulp.task('dev', gulp.series('php', 'sass', 'js'));

gulp.task('serve', () => {
  return browserSync.init({
    notify: false,
    injectChanges: true,
    proxy: 'localhost/'+app_name+'/dist'
  });
});

gulp.task('watch', () => {
  const watchImages = [
    src_assets_folder + 'images/**/*.+(png|jpg|jpeg|gif|svg|ico)'
  ];

  const watchVendor = [];

  node_dependencies.forEach(dependency => {
    watchVendor.push(node_modules_folder + dependency + '/**/*.*');
  });

  const watchJs = [
    src_assets_folder + 'js/**/*.js'
  ];
  
  const watchPhp = [
    src_folder + '**/*.php',
  ];

  const watchSass = [
    src_assets_folder + 'sass/**/*.sass',
    src_assets_folder + 'scss/**/*.scss',
  ];

  gulp.watch(watchJs, gulp.series('js')).on('change', browserSync.reload);
  gulp.watch(watchPhp, gulp.series('php')).on('change', browserSync.reload);
  gulp.watch(watchSass, gulp.series('sass'));
  gulp.watch(watchImages, gulp.series('images')).on('change', browserSync.reload);
  gulp.watch(watchVendor, gulp.series('vendor')).on('change', browserSync.reload);
});

gulp.task('default', gulp.series('build', gulp.parallel('serve', 'watch')));
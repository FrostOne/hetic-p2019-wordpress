var gulp         = require('gulp');
var sass         = require('gulp-sass');
var cssnano      = require('gulp-cssnano');
var autoprefixer = require('gulp-autoprefixer');
var browserSync  = require('browser-sync');

// Lint Task
gulp.task('lint', function() {
  return gulp.src('app/js/*.js')
  .pipe(jshint())
  .pipe(jshint.reporter('default'))
  .on('error', function(error) {
    console.error('' + error);
  })
})

gulp.task('style', function() {
  return gulp.src('app/sass/*.scss') // Gets all files ending with .scss in app/scss
  .pipe(sass.sync().on('error', sass.logError)) // avoid break script if error sass
  .pipe(autoprefixer({
    browsers: ['last 4 versions'],
    cascade: false
  }))
  .pipe(cssnano())
  .pipe(gulp.dest('dist/css'))
});

gulp.task('sass', function() {
  return gulp.src('app/sass/*.scss') // Gets all files ending with .scss in app/scss
  .pipe(sass.sync().on('error', sass.logError)) // avoid break script if error sass
  .pipe(autoprefixer({
    browsers: ['last 4 versions'],
    cascade: false
  }))
  .pipe(gulp.dest('app/css'))
  .pipe(browserSync.reload({
    stream: true
  }))
});

gulp.task('browserSync', function() {
  browserSync({
    server: {
      baseDir: 'app'
    },
  })
})

// Compress imgs
gulp.task('imagemin', function() {
  return gulp.src('app/src/img/*')
  .pipe(imagemin({
    progressive: true
  }))
  .pipe(gulp.dest('dist/img'))
})

gulp.task('dev', ['browserSync', 'sass', 'scripts'], function (){
  gulp.watch('app/sass/**/*.scss', ['sass']);
  gulp.watch('app/*.html', browserSync.reload);
  gulp.watch('app/js/**/*.js', browserSync.reload);
  // Other watchers
});

gulp.task('build', ['imagemin', 'style', 'scripts']);

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();
var imagemin = require('gulp-imagemin');

gulp.task('sass', function () {
  return gulp
    .src('./src/style/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({errLogToConsole: true, outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(autoprefixer({browsers: ['last 2 versions', '> 5%', 'Firefox ESR']}))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
});

// Compress images
gulp.task('images', () =>
  gulp.src('src/images/*')
    .pipe(imagemin())
    .pipe(gulp.dest('./images'))
);

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {
    browserSync.init({
        server: "./"
    });

    gulp.watch('./src/style/**/*.scss', ['sass']);
    gulp.watch('./src/images/*', ['images']);
    gulp.watch('./*.html').on('change', browserSync.reload);
});

gulp.task('default', ['sass', 'images', 'serve']);

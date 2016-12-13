var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('default', function() {
  // place code for your default task here
});

gulp.task('serve', ['sass', 'js'], function() {
  browserSync.init({
      proxy: "localhost:8080",
      online: true,
      ui: {
        port: 3001
      },
      port: 8080
  });

  gulp.watch("./src/scss/*.scss", ['sass']);
  gulp.watch("./src/js/*.js", ['js']);
  gulp.watch("./css/*.css").on('change', browserSync.reload);
  gulp.watch("./*.html").on('change', browserSync.reload);
  gulp.watch("*.php").on('change', browserSync.reload);
  gulp.watch("./page-tempaltes/*.php").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("./src/scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("./css"))
        .pipe(browserSync.stream());
});

// process JS files and return the stream.
gulp.task('js', function () {
    return gulp.src('src/js/*js')
        .pipe(gulp.dest('dist/js'))
        .pipe(browserSync.stream());
});

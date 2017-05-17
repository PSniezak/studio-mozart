'use strict';

var gulp    = require('gulp'),
    sass    = require('gulp-sass'),
    concat  = require('gulp-concat'),
    plumber = require('gulp-plumber');

gulp.task('sass', function() {
  return gulp.src('./css/sass/*.scss')
    .pipe(plumber({
      errorHandler: function (error) {
        console.log(error.message);
        this.emit('end');
      }}))
    .pipe(sass({
      indentedSyntax: false
    }))
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./css'));
});

gulp.task('watch', function() {
  gulp.watch('./css/sass/style.scss', ['sass']);
});

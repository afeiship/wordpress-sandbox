(function() {

  'use strict';

  var gulp = require('gulp');
  var config = require('./config');
  var argv = require('yargs').argv;
  var $ = require('gulp-load-plugins')({
    pattern: ['gulp-*', 'gulp.*', 'del']
  });

  //styles
  gulp.task('styles:expaned',function() {
    return gulp.src('src/style.scss')
      .pipe($.sass({outputStyle: 'expaned'}).on('error', $.sass.logError))
      .pipe(gulp.dest('src'));
  });

  //styles
  gulp.task('styles:compressed',function() {
    return gulp.src('src/style.scss')
      .pipe($.sass({outputStyle: 'compressed'}).on('error', $.sass.logError))
      .pipe(gulp.dest('src'));
  });

}());

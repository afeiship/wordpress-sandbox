(function() {

  'use strict';

  var gulp = require('gulp');
  var config = require('./config');
  var argv = require('yargs').argv;
  var $ = require('gulp-load-plugins')({
    pattern: ['gulp-*', 'gulp.*', 'del']
  });

  //test
  gulp.task('copy',function() {
    gulp.src(['src/**','!src/*.scss'])
    .pipe(gulp.dest('dist'));
  });

}());

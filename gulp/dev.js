(function() {

  'use strict';

  var gulp = require('gulp');
  var config = require('./config');
  var argv = require('yargs').argv;
  var $ = require('gulp-load-plugins')({
    pattern: ['gulp-*', 'gulp.*', 'del']
  });

  gulp.task('dev', function() {
    gulp.watch('src/*.scss', ['styles:expaned']);
    gulp.watch('src/*.php', ['copy']);
  });



}());

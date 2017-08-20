var gulp = require('gulp');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var concat = require('gulp-concat');
var fs = require('fs-extra');
var runSequence = require('run-sequence');
var SOURCE_CSS = 'redesign/templates/**/*.scss';
var TARGET_CSS = 'redesign/css';
var SOURCE_JS = 'redesign/templates/**/*.js';
var TARGET_JS = 'redesign/js';

gulp.task('build', function(callback){
    runSequence('build-css', 'build-js', callback);
});

gulp.task('build-css', function(callback) {
    gulp.src(SOURCE_CSS)
            .pipe(concat('mfj.min.scss'))
            .pipe(sass())
            .pipe(gulp.dest(TARGET_CSS));

    callback();
});

gulp.task('build-js', function(callback) {
    gulp.src(SOURCE_JS)
            .pipe(concat('mfj.min.js'))
            .pipe(gulp.dest(TARGET_JS));
    callback();
})
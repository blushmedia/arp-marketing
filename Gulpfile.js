'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
// var browserSync = require('browser-sync').create();

gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'))
        // .pipe( browserSync.stream() );
});

//Watch task
gulp.task('default',function() {
    // browserSync.init( {
    //     files: [ './**/*.php', '*.php' ],
    //     proxy: 'http://arp.dev',
    // } );
    gulp.watch('sass/**/*.scss',['styles']);
});


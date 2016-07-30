const gulp = require('gulp');
const include = require('gulp-include');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');
const watch = require('gulp-watch');
const babel = require('gulp-babel');
const sourcemaps = require('gulp-sourcemaps');
const gulpIf = require('gulp-if');
const autoprefixer = require('gulp-autoprefixer');
const args = require('get-gulp-args')();
const fs = require('fs');

//Set the env to "dev" by default, you can use any another value to remove sourcemaps (gulp --env=prod)
const isDev = (args.env || 'dev') === 'dev';

function onError(error) {
    console.log(error);
    this.emit('end');
}

/**
 * DEFAULT
 */
gulp.task('default', ['versionning', 'lib', 'sass', 'js', 'watch']);

/**
 * VERSIONNING
 */
gulp.task('versionning', function() {
    if (!args.version) {
        return;
    }

    fs.writeFile('./../version.php', '<?php $version = \'${args.version}\';');
});

/**
 * SASS
 */
gulp.task('sass', function () {
    //Generates a sourcemap
    gulp.src(['./sass/main.scss', './sass/color-themes/*.scss'])
        .pipe(gulpIf(isDev, sourcemaps.init()))
        .pipe(gulpIf(isDev, sourcemaps.write('./../css/')));

    return gulp.src('./sass/color-themes/*.scss')
        .pipe(sass()).on('error', onError)
        .pipe(autoprefixer({ browsers: ["IE >= 10", 'Android >= 4.4', 'Firefox >= 24', 'iOS >= 7', '> 2%'] }))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('./../css/color-themes/'));
});

/**
 * LIBRARIES
 */
gulp.task('lib', function () {
    return gulp.src('./javascript/include.js')
        .pipe(gulpIf(isDev, sourcemaps.init()))
        .pipe(include())
        .pipe(uglify({mangle:true}))
        .pipe(rename('libraries.min.js'))
        .pipe(gulpIf(isDev, sourcemaps.write('./../js/')))
        .pipe(gulp.dest('./../js/'));
});

/**
 * JAVASCRIPT
 */
gulp.task('js', function () {
    return gulp.src('./javascript/main.js')
        .pipe(plumber())
        .pipe(gulpIf(isDev, sourcemaps.init()))
        .pipe(include())
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(uglify({mangle:true}))
        .pipe(rename('script.min.js'))
        .pipe(gulpIf(isDev, sourcemaps.write('./../js/')))
        .pipe(gulp.dest('./../js/'));
});

/**
 * WATCH
 */
gulp.task('watch', function() {
    if (!isDev) {
        return;
    }

    gulp.watch(['sass/**/*.scss'], ['sass']);
    gulp.watch('javascript/**/*.js', ['js']);
});

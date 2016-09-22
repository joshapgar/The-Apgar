var gulp = require('gulp');
var sass = require('gulp-sass');
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var browserSync = require('browser-sync').create();

var plumberErrorHandler = { errorHandler: notify.onError({
		title: 'Gulp',
		message: 'Error: <%= error.message %>'
	})
};

gulp.task('sass', function(){
	gulp.src('./library/scss/*.scss')
	.pipe(plumber(plumberErrorHandler))
	.pipe(sass())
	.pipe(gulp.dest('./library/css'))
	.pipe(browserSync.stream())
});

gulp.task('js', function(){
	gulp.src('./library/js/**/*.js')
	.pipe(plumber(plumberErrorHandler))
	.pipe(jshint())
	.pipe(jshint.reporter('fail'))
	.pipe(concat('main.js'))
	.pipe(gulp.dest('./library/js'))
	.pipe(browserSync.stream())
});

gulp.task('img', function(){
	gulp.src('./library/images/*.{png,jpg,gif}')
	.pipe(plumber(plumberErrorHandler))
	.pipe(imagemin({
		optimizationLevel: 7,
		progressive: true
	}))
	.pipe(gulp.dest('./library/images/'))
	.pipe(browserSync.stream())
});

gulp.task('watch', ['sass', 'js', 'img'], function(){
	browserSync.init({
		proxy: 'theapgar.dev'
	});

	gulp.watch('./library/scss/*.scss', ['sass']);
	gulp.watch('./library/js/**/*.js', ['js']);
	gulp.watch('./library/images/*.{png,jpg,gif}', ['img']);
	gulp.watch('./**/*.php').on('change', browserSync.reload);
})

gulp.task('default', ['sass', 'js', 'img']);
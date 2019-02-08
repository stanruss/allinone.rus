var syntax        = 'sass', // Syntax: sass or scss;
		gulpversion   = '4'; // Gulp version: 3 or 4

var gulp         = require('gulp');
var	rename       = require('gulp-rename');
var	postcss      = require('gulp-postcss');
var	assets       = require('postcss-assets');
var	nested       = require('postcss-nested');
var	short        = require('postcss-short');
var	cssnano      = require('gulp-cssnano');
var	cssnext      = require('postcss-cssnext');
var	autoprefixer = require('gulp-autoprefixer');
var	sass         = require('gulp-sass');
var notify       = require('gulp-notify');
var browserSync  = require('browser-sync');

gulp.task('browser-sync', function() {
	browserSync({
		proxy: 
		"allinone.rus",
		notify: false
	
	});
});
gulp.task('sass', function() {
		var processors = [
			short,
			nested,
			cssnext,
			assets({
				loadPaths: ['assets/templates/Stas/app/'],
				relativeTo: 'assets/templates/Stas/app/css/'
			})
		];
	return gulp.src('assets/templates/Stas/app/'+syntax+'/**/*.'+syntax+'')
	.pipe(sass().on("error", notify.onError()))
	.pipe(postcss(processors))
	.pipe(rename({suffix: '.min', prefix : ''}))
	.pipe(autoprefixer({
    browsers: ['last 12 versions'],
    cascade: false
    }))
	.pipe(cssnano())
	.pipe(gulp.dest('assets/templates/Stas/app/css'))
	.pipe(browserSync.reload({stream: true}));
});
gulp.task('code', function() {
	return gulp.src('app/*.html')
	.pipe(browserSync.reload({ stream: true }))
});
if (gulpversion == 3) {
gulp.task('watch', ['sass', 'browser-sync'], function() {
	gulp.watch('assets/templates/Stas/app/'+syntax+'/**/*.'+syntax+'', ['sass']);
	gulp.watch('*.php', browserSync.reload);
});
gulp.task('default', ['watch', 'sass']);
}
if (gulpversion == 4) {
	gulp.task('watch', function() {
	gulp.watch('assets/templates/Stas/app/'+syntax+'/**/*.'+syntax+'', gulp.parallel('sass'));
	gulp.watch('app/*.html', gulp.parallel('code'))
});
gulp.task('default', gulp.parallel('sass', 'browser-sync', 'watch'));
}

var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var jade = require('gulp-jade');
var plumber = require('gulp-plumber');
var data = require('gulp-data');
var fs = require('fs');

var paths = {
	sass: [ 'assets/app/src/scss/*.scss' ],
	js: [
		'assets/app/node_modules/bootstrap/dist/js/bootstrap.min.js',
		'assets/app/node_modules/jquery/dist/jquery.min.js',
		'assets/app/node_modules/tether/dist/js/tether.min.js'
	],
	jade: [ 'assets/app/src/**/*.jade' ]
};

gulp.task('jade', function() {
	return gulp
		.src([ 'assets/app/src/jade/index.jade', '' ])
		.pipe(
			data(function(file) {
				return JSON.parse(fs.readFileSync('./data.json'));
			})
		)
		.pipe(jade())
		.pipe(plumber())
		.pipe(gulp.dest('assets/app/dest'))
		.pipe(browserSync.stream());
});

gulp.task('sass', function() {
	return gulp
		.src('assets/app/src/scss/index.scss')
		.pipe(sass())
		.pipe(plumber())
		.pipe(gulp.dest('assets/app/dest/css'))
		.pipe(browserSync.stream());
});

gulp.task('js', function() {
	return gulp.src(paths.js).pipe(plumber()).pipe(gulp.dest('assets/app/dest/js')).pipe(browserSync.stream());
});

gulp.task('serve', [ 'sass', 'jade', 'js' ], function() {
	browserSync.init({
		proxy: 'localhost'
	});

	gulp.watch(paths.sass, [ 'sass' ]).on('change', browserSync.reload);
	gulp.watch(paths.js, [ 'js' ]).on('change', browserSync.reload);

	gulp.watch(paths.jade, [ 'jade' ]).on('change', browserSync.reload);

	gulp.watch('assets/app/dest/*.html', [ 'jade' ]).on('change', browserSync.reload);
});

gulp.task('default', [ 'js', 'jade', 'sass', 'serve' ]);

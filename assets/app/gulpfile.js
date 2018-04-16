var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var jade = require('gulp-jade');
var plumber = require('gulp-plumber');
var data = require('gulp-data');
var fs = require('fs');

var paths = {
	sass: [ './src/scss/*.scss' ],
	js: [ './src/js/*.js' ],
	jade: [ './src/**/*.jade' ]
};

gulp.task('jade', function() {
	return gulp
		.src([ './src/jade/*.jade', '' ])
		.pipe(
			data(function(file) {
				return JSON.parse(fs.readFileSync('./data.json'));
			})
		)
		.pipe(jade())
		.pipe(plumber())
		.pipe(gulp.dest('./dest'))
		.pipe(browserSync.stream());
});

gulp.task('sass', function() {
	return gulp
		.src('./src/scss/index.scss')
		.pipe(sass())
		.pipe(plumber())
		.pipe(gulp.dest('./dest/css'))
		.pipe(browserSync.stream());
});

gulp.task('js', function() {
	return gulp.src(paths.js).pipe(plumber()).pipe(gulp.dest('./dest/js')).pipe(browserSync.stream());
});

gulp.task('serve', [ 'sass', 'jade', 'js' ], function() {
	browserSync.init({
		// proxy: 'localhost',
		server: {
			baseDir: './dest'
		}
	});

	gulp.watch(paths.sass, [ 'sass' ]).on('change', browserSync.reload);
	gulp.watch(paths.js, [ 'js' ]).on('change', browserSync.reload);

	gulp.watch(paths.jade, [ 'jade' ]).on('change', browserSync.reload);

	gulp.watch('./dest/*.html', [ 'jade' ]).on('change', browserSync.reload);
});

gulp.task('default', [ 'js', 'jade', 'sass', 'serve' ]);

var gulp = require('gulp');
var sass = require('gulp-sass');
var csscomb = require('gulp-csscomb');
var htmlmin = require('gulp-htmlmin');
var rename = require("gulp-rename");
var uglify = require('gulp-uglify');
var runSequence = require('run-sequence');
var gzip = require('gulp-gzip');
var fs = require('fs');

gulp.task('sass', function () {
	return gulp.src('./s.scss')
		.pipe(csscomb())
		.pipe(sass({
			outputStyle: 'compressed'
		}).on('error', sass.logError))
		.pipe(gulp.dest('./'));
});

gulp.task('minify', function() {
  return gulp.src('./index.full.php')
    .pipe(htmlmin({
		collapseWhitespace: true
	}))
	.pipe(rename('./index.php'))
    .pipe(gulp.dest('./'));
});

gulp.task('uglify', function (cb) {
	return gulp.src('./script.js')
		.pipe(rename('./s.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./'));
});

gulp.task('watch', function () {
	runSequence('sass', 'minify', 'uglify');

	gulp.watch('s.scss', ['sass']);
	gulp.watch('index.full.php', ['minify']);
	gulp.watch('script.js', ['uglify']);
});

gulp.task('compress', function() {
    gulp.src(['./s.css', './index.php'])
    .pipe(gzip())
    .pipe(gulp.dest('./'));
});

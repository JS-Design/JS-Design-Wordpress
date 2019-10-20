var gulp = require ('gulp'),
		sass = require ('gulp-sass'),
		sourcemaps = require('gulp-sourcemaps'),
		autoprefixer = require('gulp-autoprefixer'),
		rename = require("gulp-rename"),
		plumber = require("gulp-plumber"),
		imagemin = require("gulp-imagemin"),
    	svgmin = require('gulp-svgmin');
		//browsersync = require("browser-sync").create(), // for live browser reload

// Image Task
// Minifies Image Files
gulp.task('image', function() {
	gulp.src('images/*.{jpg,jpeg,png}')
		.pipe(imagemin())
		.pipe(gulp.dest('images/min/'));
});

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

// Compile Task
// Compiles Sass Files
gulp.task('styles', function() {
  gulp.src('scss/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(plumber())
		.pipe(sass({
			outputStyle: 'compressed',
			includePaths: ['scss']
		}))
		.pipe(autoprefixer(autoprefixerOptions))
		.pipe(sourcemaps.write('/'))
		.pipe(gulp.dest('css'));
});

// gulp.task('serve', ['styles'], function(){
//  	browsersync.init({
//  		proxy: 'yourlocal.dev'
//  	});
//  });

// Watch Task
// Watches JS
// Then Minifies using Scripts Task
gulp.task('watch', function(){
	gulp.watch('scss/**/*.scss', ['styles']);
	gulp.watch('images/*.{jpg,jpeg,png}', ['image']);
	//gulp.watch('*.php').on('change', browsersync.reload)
	//gulp.watch('js/*.js', ['scripts']).on('change', browsersync.reload)
});

gulp.task('default', ['styles', 'watch', 'image']);

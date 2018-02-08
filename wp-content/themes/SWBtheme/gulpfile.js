var gulp         = require('gulp');
var sass         = require('gulp-sass');
var plumber      = require('gulp-plumber');
var notify       = require('gulp-notify');
var browserSync  = require('browser-sync');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps   = require('gulp-sourcemaps');
var spritesmith  = require('gulp.spritesmith');
var gulpIf       = require('gulp-if');
var del          = require('del');
var runSequence  = require('run-sequence');
var jshint       = require('gulp-jshint');
var jscs         = require('gulp-jscs');
var scssLint     = require('gulp-scss-lint');
var concat       = require('gulp-concat');
var uglify       = require('gulp-uglify');
var unCss        = require('gulp-uncss');
var rename       = require('gulp-rename');
var minifyCss    = require('gulp-minify-css');
var imagemin     = require('gulp-imagemin');
var cache        = require('gulp-cache');

function customPlumber(errTitle) {
	return plumber({
		errorHandler: notify.onError({
			title: errTitle || "Error running Gulp",
			message: "Error: <%= error.message %>",
			sound: "Purr",
		})
	});
}

gulp.task('sass', function(){
	return gulp.src('src/sass/**/*.scss')
		.pipe(customPlumber('Error Running Sass')) // Checks for errors for all plugins.
		.pipe(sourcemaps.init()) 
		.pipe(sass())
		.pipe(autoprefixer({
			browsers: ['> 1%', 'ie 8-11', 'last 20 versions']
		}))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./css'))
		.pipe(browserSync.reload({
			stream: true
		}))
});

gulp.task('concatCss', ['sass'], function() {
	gulp.src([
		'./cssplugin/mediabox/magnific-popup.css',
		'./cssplugin/mediabox/mediaBoxes.css',
		'./css/style.css'
		])
	.pipe(concat('style.css'))
	.pipe(gulp.dest('./css'))
	.pipe(browserSync.reload({
			stream: true
		}))
});

// Join all the javascript files together. //

gulp.task('concatScripts', function(){
	gulp.src([ // add all the javascript files here please, in the order you need them to concat. //
		'./jsplugin/mediabox/jquery.mediaBoxes.js',
		'./jsplugin/mediabox/jquery.magnific-popup.min.js',
		'./jsplugin/mediabox/waypoints.min.js',
		'./jsplugin/mediabox/jquery.transit.min.js',
		'./jsplugin/mediabox/jquery.easing.js',
		'./jsplugin/mediabox/jquery.imagesLoaded.min.js',
		'./jsplugin/mediabox/modernizr.custom.min.js',
		'./jsplugin/mediabox/jquery.isotope.min.js',
		'bower_components/scrollup/dist/jquery.scrollUp.min.js',
		'src/js/myscripts.js',
		])
	.pipe(concat('myscripts.js'))
	.pipe(gulp.dest('./js'));
});

// Minify the main javascript file. //

gulp.task('minifyScripts', function(){
	gulp.src('./js/myscripts.js')
		.pipe(uglify())
		// .pipe(rename('myscripts.min.js')) I don't want to rename this file because I would then need to change the functions.php file
		.pipe(gulp.dest('./js'));
});

gulp.task('minifyCss', function(){
	return gulp.src('./css/style.css')
		//.pipe(unCss({
		//	html: ['http://localhost/swbtheme/']
		//}))
		.pipe(minifyCss({processImport: false}))
		// .pipe(rename('style.min.css')) I don't want to rename this file because I would then need to change the functions.php file
		.pipe(gulp.dest('./css'))
});

// Refreash the browsers. //

gulp.task('browserSync', function() {
	browserSync({
		proxy: 'localhost/woodsidegc/'
	})
});

// Build the sprite sheet. //

gulp.task('sprites', function() {
	gulp.src('./img/sprites/**/*')
		.pipe(spritesmith({
			cssName: '_sprites.scss',
			imgName: 'sprites.png',
			imgPath: '../img/sprites.png'
		}))
		.pipe(gulpIf('*.png', gulp.dest('./img')))
		.pipe(gulpIf('*.scss', gulp.dest('src/sass/utilities')))
});

// Optomize images. //

gulp.task('images', function() {
	return gulp.src('src/images/**/*.+(png|jpg|jpeg|gif|svg)')
	.pipe(cache(imagemin({
		interlaced: true,
		progressive: true,
		optimizationLevels: 5,
		multipass: true,
	}), {name: 'swbtheme'}))
	.pipe(gulp.dest('./img/images'))
});

gulp.task('cache:clear', function(callback) {
	return cache.clearAll(callback)
});

// Lint my javascript. //

gulp.task('lint:js', function() {
	return gulp.src('src/js/**/*.js')
		.pipe(customPlumber('JSHint Error'))
		.pipe(jshint())
		.pipe(jshint.reporter('jshint-stylish'))
		.pipe(jshint.reporter('fail', {
			ignoreWarning: true,
  			ignoreInfo: true 
		}))
		.pipe(jscs({
			fix: true,
			configPath: '.jscsrc'
		}))
		.pipe(gulp.dest('./js'))
});

// Lint my sass. //

gulp.task('lint:sass', function() {
	return gulp.src('src/sass/**/*.scss')
		.pipe(scssLint({
			config: '.scss-lint.yml'
		}))
});

// Clean up and delete the files so we start clean. //

gulp.task('clean:dev', function(){
	del([
		'./css/*.css',
		'./js/*.js',
	], {force: true});
});


gulp.task('watch',function(){ // run sass task before the watch task function starts.
	gulp.watch('src/sass/**/*.scss', ['sass', 'concatCss']);
	gulp.watch('src/js/**/*.js', ['lint:js']);
	gulp.watch('src/js/**/*.js', ['concatScripts'])
	gulp.watch('src/js/**/*.js', browserSync.reload);
	gulp.watch('./*.php', browserSync.reload);
});


gulp.task('default', function(callback){
	runSequence(
		'clean:dev',
		['sprites', 'lint:js', /*'lint:sass'*/],
		['sass', 'concatScripts'],
		['concatCss'],
		['browserSync', 'watch'],
		callback
	)
});

gulp.task('production', function(callback){
	runSequence(
		['minifyScripts', 'minifyCss'],
		callback
		)
});



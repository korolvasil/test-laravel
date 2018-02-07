var componentsDirectory = 'node_modules';
var gulp = require('gulp');
var sass = require('gulp-sass');
var nano = require('gulp-cssnano');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

gulp.task('styles', function(){
    return gulp.src(['resources/assets/scss/app.scss'])
        .pipe(sass())
        .pipe(autoprefixer({browsers: ['last 2 versions']}))
        .pipe(nano())
        .pipe(gulp.dest('public/css'));
});

gulp.task('scripts', function(){
    return gulp.src(['resources/assets/js/app.js'])
    .pipe(uglify())
    .pipe(gulp.dest('public/js'));
});

gulp.task('watch-build', function(){
    //watch for changes
    gulp.watch('resources/assets/scss/**/**/*.scss', ['styles']);
    gulp.watch('resources/assets/js/**/**/*.js', ['scripts']);
});

gulp.task('default', ['styles', 'scripts']);

gulp.task('watch', ['default', 'watch-build']);

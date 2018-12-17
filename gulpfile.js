const gulp = require("gulp"),
    sass = require("gulp-sass"),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssnano = require("cssnano"),
    sourcemaps = require("gulp-sourcemaps"),
    uglify = require('gulp-uglify'),
    babel = require('gulp-babel');

const paths = {
    styles: {
        src: "assets/sass/app.scss",
        destination: "public/css"
    },
    js: {
        src: "assets/js/app.js",
        destination: "public/js"
    }
};

function styles() {
    return (
        gulp
            .src(paths.styles.src)
            .pipe(sourcemaps.init())
            .pipe(sass())
            .on("error", sass.logError)
            .pipe(postcss([autoprefixer(), cssnano()]))
            .pipe(sourcemaps.write())
            .pipe(gulp.dest(paths.styles.destination))
    );
}

function javascript() {
    return (
        gulp
            .src(paths.js.src)
            .pipe(sourcemaps.init())
            .pipe(babel({
                presets: ['@babel/env']
            }))
            .pipe(uglify())
            .pipe(sourcemaps.write())
            .pipe(gulp.dest(paths.js.destination))
    );
}

function watch() {
    styles();
    javascript();

    gulp.watch(paths.styles.src, styles);
    gulp.watch(paths.js.src, javascript());
}

exports.styles = styles;
exports.javascript = javascript;
exports.watch = watch;
exports.build = gulp.series(styles, javascript);
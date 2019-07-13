const { series, parallel, src, watch } = require('gulp');
const gulp 			= require('gulp');
const webp 			= require('gulp-webp');
const concat     	= require('gulp-concat');
const sass       	= require('gulp-sass');
const uglify        = require('gulp-uglify');
const sourcemaps 	= require('gulp-sourcemaps');
const consolidate   = require('gulp-consolidate');
const iconfont      = require('gulp-iconfont');

const scriptsSourcePath = 'assets/scripts-source';
const scriptsTargetPath = 'assets/scripts';

const stylesSourcePath = 'assets/styles-source';
const stylesTargetPath = 'assets/styles';

const imagesTargetPath = 'assets/images';

const iconsSourcePath = 'assets/svg';
const iconsTargetPath = 'assets/fonts';

function scripts() {
  return src(
        [
            `${scriptsSourcePath}/vendor/jquery/jquery-3.3.1.js`,
            //`${scriptsSourcePath}/vendor/jquery/jquery.fancybox.js`,
            //`${scriptsSourcePath}/vendor/slick-1.8.1/slick.js`,

            // Bootstrap
            //`${scriptsSourcePath}/vendor/bootstrap-4.3.1/bootstrap.js`,
            //`${scriptsSourcePath}/vendor/bootstrap-4.3.1/bootstrap.bundle.js`,

            `${scriptsSourcePath}/config.js`,
        ]
    )
    .pipe(concat('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(scriptsTargetPath))
}

function images() {
  return src(`${imagesTargetPath}/*.{jpg,png}`)
        .pipe(webp())
        .pipe(gulp.dest(imagesTargetPath))
}

function css() {
    return src (
        [
         `${stylesSourcePath}/styles.min.scss`,
        ])
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'})
        .on('error', sass.logError))
        .pipe(sourcemaps.write('maps'))
        .pipe(gulp.dest(stylesTargetPath));
}

    

function icons() {
   return src(`${iconsSourcePath}/*.svg`)
        .pipe(iconfont({
            fontName: 'iconfont',
            formats: ['ttf', 'eot', 'woff', 'woff2', 'svg'],
            appendCodepoints: true,
            appendUnicode: false,
            normalize: true,
            fontHeight: 1000,
            centerHorizontally: true
        }))
        .on('glyphs', function (glyphs, options) {
            gulp.src(`${iconsSourcePath}/_iconfont.scss`)
                .pipe(consolidate('underscore', {
                    glyphs: glyphs,
                    fontName: options.fontName,
                    fontDate: new Date().getTime()
                }))
                .pipe(gulp.dest(`${stylesSourcePath}`));
        })
        .pipe(gulp.dest(iconsTargetPath));
}

exports.images = images;
exports.css = css;
exports.scripts = scripts;
exports.icons = icons;
exports.default = parallel(css, scripts);

watch(`${stylesSourcePath}/*.scss`, css);
watch(`${scriptsSourcePath}/*.js`, scripts);
watch(`${imagesTargetPath}/*.{jpg,png}`, images);
watch(`${iconsSourcePath}/*.svg`, icons);
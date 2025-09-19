import gulp from 'gulp';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import plumber from 'gulp-plumber';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import changed from 'gulp-changed';
import imagemin, {mozjpeg, optipng} from 'gulp-imagemin';
import uglify from 'gulp-uglify';
import rename from 'gulp-rename';

const sass = gulpSass(dartSass);

const src = {
  sass: ['./src/sass/**/*.scss'],
  sasswatch: './src/sass/**/*.scss',
  img:'./src/images/**/*',
  js: './src/js/**/*.js'
};
 
const dest = {
  css: './assets/css',
  img: './assets/images/',
  js: './assets/js/'
};


const sass_task = () => {
  return gulp.src(src.sass)
  .pipe(plumber({
    errorHandler: (error) => {
    console.log(error.messageFormatted);
    },
  }))
  .pipe(sass({ outputStyle: "expanded" }).on("error", sass.logError))
  .pipe(postcss([
      autoprefixer({
        overrideBrowserslist: [
          "> 10%", 
          "last 2 versions",
        ],
      cascade: false
      })
    ]))
  // .pipe(rename({
  //           extname: '.min.js'
  //       }))
  .pipe(gulp.dest(dest.css))
}

const img_task = () => (
    gulp.src(src.img,{ encoding: false })
    .pipe(changed(dest.img))
    .pipe(imagemin([
        mozjpeg({quality: 85, progressive: true}),
        optipng({optimizationLevel: 5})
    ]))
    .pipe(gulp.dest(dest.img))
);

const js_task = () => {
  return gulp.src(src.js)
    .pipe(uglify())
    // .pipe(rename({
    //         extname: '.min.js'
    //     }))
    .pipe(gulp.dest(dest.js));
}

const watch_task = () => {
  gulp.watch(src.sass, sass_task);
  gulp.watch(src.img, img_task);
  gulp.watch(src.js, js_task);
}
 
export default gulp.parallel(watch_task, img_task);

export {sass_task as sass};
export {watch_task as watch};
export {img_task as img};
export {js_task as js};


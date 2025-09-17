import gulp from 'gulp';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import plumber from 'gulp-plumber';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';

const sass = gulpSass(dartSass);

const src = {
  sass: ['./src//sass/**/*.scss'],
  sasswatch: './src/sass/**/*.scss',
};
 
const dest = {
  css: './assets/css',
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
  .pipe(gulp.dest(dest.css))
}

 
const watch_task = () => {
  gulp.watch(src.sass, sass_task);
}
 
export default gulp.parallel(watch_task);

export {sass_task as sass};
export {watch_task as watch};


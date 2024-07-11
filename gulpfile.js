const { src, dest, series, watch } = require("gulp");
const sass = require("gulp-sass")(require("sass"));

function scssTask() {
  return src("css/scss/**/*.scss")
    .pipe(sass())
    .pipe(dest("css/"));
}

function watchTask() {
  watch("css/scss/**/*.scss", series(scssTask));
}

exports.default = series(scssTask, watchTask);

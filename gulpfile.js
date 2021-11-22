
//Sass compilation function
const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourceMaps = require('gulp-sourcemaps');



//default task
function defaultTask(cb) {
    // place code for your default task here
    cb();
}


function buildSass() {
    return src('./sass/**/*.scss')
    .pipe(sourceMaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourceMaps.write(''))
    .pipe(dest('./css'));
};


//function that runs on watch and so is constant
const devWatch = () => {
    watch('./sass/**/*.scss', buildSass);
};




exports.buildSass = buildSass;
exports.devWatch = devWatch;
exports.default = defaultTask;
var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('default', function(){
    browserSync.init({
        server: {
            baseDir: './'
        },
        files: ['*.css', '*.html']
        proxy: {

	target: "http://www.cbp-excercises.local"
},

open: 'external'
host: 'www.cbp-excercises.local',
port: 3000,
files: 
'**/*.css',
'**/* .html'
]

    });
});



module.exports = function(grunt) {

	// 1. Configure tasks
	grunt.initConfig({

		pkg: grunt.file.readJSON( 'package.json' ),

		browserify: {
      dist: {
        options: {
          transform: [['babelify', { 'sourceType': 'module' }]]
        },
        files: {
          'themes/relibond/js/bundle.js': 'themes/relibond/dev/js/**/*.js'
        }
      }
    },

		// Compile .scss-files in 'dev' folder into 1 style.css file that WP can read
		sass: {
			dev: {
				options: {
					outputStyle: 'expanded' // 'expanded' = makes the output .css-file easy to read
				},
				files: {
					'themes/relibond/style.css': 'themes/relibond/dev/scss/style.scss'
				}
			},
			build: {
				options: {
					outputStyle: 'compressed' // 'compressed' = minifies the output for live server
				},
				files: {
					'themes/relibond/style.css': 'themes/relibond/dev/scss/style.scss'
				}
			}
		},

		// Initialize 'grunt watch'-task with livereload (also install livereload plugin in browser to make it work)
		watch: {
      options: {
        livereload: true,
      },
			js: {
				files: [ 'themes/relibond/dev/js/*.js' ],
				tasks: [ 'browserify' ] // Concatenate scripts on change, but don't minify while developing (see options under 'uglify' ^)
			},
			css: {
				files: [ 'themes/relibond/dev/scss/**/*.scss' ],
				tasks: [ 'sass:dev' ] // Concatenate styles on change, but don't minify while developing (see options under 'sass' ^)
			},
      livereload: {
        files: [ 'themes/relibond/*.html', 'themes/relibond/*.php', 'themes/relibond/images/**/*.{png,jpg,jpeg,gif,webp,svg}']
      }
		}

	});

	// 2. Load plugins
	grunt.loadNpmTasks( 'grunt-browserify' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' ); // Runs on command 'grunt watch'
	grunt.loadNpmTasks( 'grunt-sass' );

	// 3. Register task(s)
	grunt.registerTask('default', [ 'browserify', 'sass:dev' ]); // Runs on command 'grunt' as it is set to default
	grunt.registerTask('build', [ 'browserify', 'sass:build' ]); // Runs on command 'grunt build'

};

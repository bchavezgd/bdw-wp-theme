module.exports = function (grunt) {

  // Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
	// load plugin options and stuff. 
		watch: {
			sass: {
				files: ['sass/*.scss','sass/*.sass'],
				tasks: ['compass:dev', 'autoprefixer:css', 'concat:css']
			},
			options: {
				livereload: true,
				
			}
		},
		uglify: {},
		// make a zipfile
		compress: {
			prod: {
				options: {
					archive: '<%= pkg.name %>.<%= pkg.version %>.zip'
				},
				files: [
					{
						src: ['*.php','style.css'],
						dest: '<%= pkg.name %>',
						filter: 'isFile'
					}, // includes files in path
					{
						src: ['js/*.js','images/**'],
						dest: '<%= pkg.name %>'
					} //, includes files in path and its subdirs
					
					//{expand: true, cwd: 'path/', src: ['**'], dest: 'internal_folder3/'}, 
					// makes all src relative to cwd
					//{flatten: true, src: ['path/**'], dest: 'internal_folder4/', filter: 'isFile'} 
					// flattens results to a single level
					]
			}
		},
		imagemin: {},
		compass: {
			dev: {
				options: {
					config: 'sass/config.rb',
					cssDir: 'sass/lib'
				},
			prod: {
				options: {
					config: 'sass/config.rb',
					cssDir: 'sass/lib',
					outputStyle: 'compact'
				}
			}
			}
		},
		concat: {
			css: {
				src: ['sass/lib/wp-banner.css','sass/lib/prefixed.css'], 
				dest: 'style.css'
			}
		},
		autoprefixer: {
			css: {
				src: ['sass/lib/screen.css'],
				dest: 'sass/lib/prefixed.css'
			}
		}
	});

  // Load plugins for tasks
	// uglify
	grunt.loadNpmTasks('grunt-contrib-uglify');
	// compass
	grunt.loadNpmTasks('grunt-contrib-compass');
	// imagemin
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	// concat
	grunt.loadNpmTasks('grunt-contrib-concat');
	// watch
	grunt.loadNpmTasks('grunt-contrib-watch');
	// compress
	grunt.loadNpmTasks('grunt-contrib-compress');
	// prefixer
	grunt.loadNpmTasks('grunt-autoprefixer');

  // Default task(s).
	grunt.registerTask('default', ['uglify','compass:dev']);
	grunt.registerTask('refresh', ['compass:dev', 'concat:css']);
	grunt.registerTask('done', ['compass:prod', 'autoprefixer', 'concat', 'compress:prod'])

};
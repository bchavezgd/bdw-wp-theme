module.exports = function (grunt) {

  // Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
	// load plugin options and stuff. 
		watch: {
			css: {
				files: 'sass/*.sass',
				tasks: ['compass','concat']
			},
			options: {
				reload: true
			}
		},
		uglify: {},
		// make a zipfile
		compress: {
			main: {
				options: {
					archive: '<%= pkg.name %>.<%= pkg.version %>.zip',
					cwd: '..'
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
					}, // includes files in path and its subdirs
					
					//{expand: true, cwd: 'path/', src: ['**'], dest: 'internal_folder3/'}, // makes all src relative to cwd
					//{flatten: true, src: ['path/**'], dest: 'internal_folder4/', filter: 'isFile'} // flattens results to a single level
					]
			}
		},
		imagemin: {},
		compass: {
			dev: {
				options: {
					config: 'sass/config.rb',
					cssDir: 'sass/lib'
				}
			}
		},
		concat: {
			options: {
				separator: '\n'
			},
			dist: {
				src: ['sass/lib/wp-banner.css','sass/lib/screen.css'], 
				dest: 'style.css'
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
	// zip
	grunt.loadNpmTasks('grunt-contrib-compress');

  // Default task(s).
	grunt.registerTask('default', ['uglify','compass:dev']);

};
module.exports = function (grunt) {

  // Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
	// load plugin options and stuff. 
		watch: {
			css: {
				files: 'sass/*.sass',
				tasks: ['compass','concat']
			}
		},
		uglify: {},
		compress: {
			prod: {
				options: {
					mode: 'zip',
					archive: '<%= pkg.name %><%= pkg.version %>.zip',
				},
				files: ['*.php','style.css','js/*.min.js','images/*'],
				dest: '..'
			}
		},
		imagemin: {},
		compass: {
			dist: {
				options: {
					config: 'config.rb'
				}
			}
		},
		concat: {
			options: {
				separator: '\n'
			},
			dist: {
				src: ['stylesheets/wp-banner.css','stylesheets/screen.css'], 
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
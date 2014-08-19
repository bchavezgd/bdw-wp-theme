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

  // Default task(s).
	grunt.registerTask('default', ['uglify','compass:dev']);

};
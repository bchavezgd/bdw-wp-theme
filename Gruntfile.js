module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
		  banner: '/*! surprise.js <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'js/surprise.js',
        dest: 'js/build/surprise.min.js'
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['uglify']);

};
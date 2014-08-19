module.exports = function (grunt) {

// Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            build: {
                src: 'js/surprise.js',
                dest: 'js/build/<%= pkg.name %>.min.js'
            }
        },
        compass: {
            dist: {
                options: {
                    config: 'sass/config.rb'
                }
            }
        },
        watch: {
            scripts: {
                files: ['sass/*.sass'],
                tasks: ['compass'],
                options: {
                    spawn: false
                }
            }
        }
    });

// Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
// Default task(s).
    grunt.registerTask('default', ['uglify', 'compass']);

};
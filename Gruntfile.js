'use strict';
module.exports = function(grunt) {

    // load all grunt tasks
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

    grunt.initConfig({

        // watch for changes and trigger compass, jshint, uglify and livereload
        watch: {
            compass: {
                files: ['scss/**/*.{scss,sass}'],
                tasks: ['sass']
            },
            js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint']
            },
            livereload: {
                options: { livereload: true },
                files: ['css/style.css', 'js/*.js', '*.php', 'img/**/*.{png,jpg,jpeg,gif,webp,svg}']
            }
        },

        // sass
        sass: {
            dist: {
              sourcemap: true,

              files: {
                './css/styles.css' : './scss/styles.scss'
              }
            }
          },

        // javascript linting with jshint
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                "force": true
            },
            all: [
                'Gruntfile.js',
                'js/source/**/*.js'
            ]
        },

        // image optimization
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7,
                    progressive: true
                },
                files: [{
                    expand: true,
                    cwd: 'img/',
                    src: '**/*',
                    dest: 'img/'
                }]
            }
        }

    });

    // register task
    grunt.registerTask('default', ['watch']);

};
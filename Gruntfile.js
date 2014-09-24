module.exports = function(grunt) {

    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        settings: {
            url: 'http://localhost:8888/nhcohen'
        },
        compass: {
            dist: {
                options: {
                    config: 'sass/config.rb',
                    outputStyle: 'compressed'
                }
            },
            dev: {
                options: {
                    config: 'sass/config.rb',
                    outputStyle: 'expanded'
                }
            }
        },
        watch: {
            compass: {
                files: 'sass/**/*.scss',
                tasks: ['compass:dev']
            },
            uglify: {
                files: 'javascripts/**/*.js',
                tasks: ['uglify']
            }
        },
        uglify: {
            dist: {
                src: 'javascripts/main.js',
                dest: 'javascripts/main.min.js'
            }
        },
        open: {
            server: {
                path: '<%= settings.url %>'
            }
        }
    });

    grunt.registerTask('build', ['compass:dist']);
    grunt.registerTask('dev', ['compass:dev', 'uglify', 'open', 'watch']);
};
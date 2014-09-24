module.exports = function(grunt) {

    grunt.initConfig({
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
            }
        }
    });

    // grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.registerTask('build', ['compass:dist']);
    grunt.registerTask('dev', ['compass:dev', 'watch']);
};
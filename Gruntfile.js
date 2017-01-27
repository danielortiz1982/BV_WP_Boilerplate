module.exports = (grunt)=>{
    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'public/src/css',
                    src: ['*.css', '!*.min.css'],
                    dest: 'public/src/css',
                    ext: '.min.css'
                }]
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    //grunt.loadNpmTasks('grunt-contrib-uglify');

    // Default task(s).
    //grunt.registerTask('default', ['uglify']);

    // Run task by command => grunt cssmin
    grunt.loadNpmTasks('grunt-contrib-cssmin');


};
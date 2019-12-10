module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      concat: {
        options: {
          separator: ';\n'
        },
        dist: {
          src: ['js/*.js'],
          dest: 'dist/<%= pkg.name %>.js'
        }
      },
      uglify: {
        options: {
          banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> %>'
        },
        dist: {
          files : {
            'dist/<%= pkg.name %>.min.js' : ['<%=concat.dist.dest %>']
          }
        }
      },
      mocha: {
        all: {
            src : ['tests/testrunner.html'],
        },
        options: {
            run: true
        }
      },
      jshint: {
        // define the files to lint
        files: ['Gruntfile.js', 'js/*.js', 'tests/*.js'],
        // configure JSHint (documented at http://www.jshint.com/docs/)
        options: {
          // more options here if you want to override JSHint defaults
          globals: {
            console: true,
            module: true
          }
        }
      }
    });
  
    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    //grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-mocha');

    // Default task(s).
    grunt.registerTask('default', ['jshint', 'mocha', 'concat', 'uglify']);
  
  };
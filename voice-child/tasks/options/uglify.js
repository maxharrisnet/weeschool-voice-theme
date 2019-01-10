module.exports = {
	all: {
		files: {
			'assets/js/base-theme.min.js': ['assets/js/base-theme.js']
		},
		options: {
			banner: '/*! <%= pkg.title %> - v<%= pkg.version %>\n' +
			' * <%= pkg.homepage %>\n' +
			' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
			' * Licensed GPLv2+' +
			' */\n',
			mangle: {
				except: ['jQuery']
			}
		}
	}
};
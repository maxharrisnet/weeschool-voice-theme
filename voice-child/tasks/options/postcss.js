module.exports = {
	dist: {
		options: {
			processors: [
				require('autoprefixer')({browsers: 'last 2 versions'})
			]
		},
		files: { 
			'assets/css/base-theme.css': [ 'assets/css/base-theme.css' ]
		}
	}
};
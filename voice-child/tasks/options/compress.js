module.exports = {
	main: {
		options: {
			mode: 'zip',
			archive: './release/wpmax.<%= pkg.version %>.zip'
		},
		expand: true,
		cwd: 'release/<%= pkg.version %>/',
		src: ['**/*'],
		dest: 'wpmax/'
	}
};
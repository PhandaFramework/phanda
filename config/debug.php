<?php

return [
	// Handles the registration of the internal loggers.
	'loggers' => [
		'default' => [
			// The logging drivers that handle this logger
			'drivers' => [
				'file'
			],

			// The channel name that this logger registers
			'channel' => 'default',

			// The minimum log level for this logger to log
			'log_level' => 'debug',

			// For any drivers that require a file, you can edit this configuration
			'log_file' => storage_path('logs/debug.log')
		]
	]
];
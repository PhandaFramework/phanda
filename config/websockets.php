<?php

// For these configuration options to be in use please make sure you've
// Enabled the WebSocket server provider in the phanda configuration file.

return [

	'apps' => [
		[
			'id' => environment('websockets.WS_1_ID', ''),
			'key' => environment('websockets.WS_1_KEY', ''),
			'secret' => environment('websockets.WS_1_SECRET', ''),
			'name' => environment('websockets.WS_1_NAME', ''),
			'host' => environment('websockets.WS_1_HOST', ''),
		]
	],

	/**
     * This array contains the hosts of which you want to allow incoming requests.
     * Leave this empty if you want to accept requests from all hosts.
     */
	'allowed_origins' => [
		//
	],

	/**
	 * The maximum request size in kilobytes that is allowed for an incoming WebSocket request.
	 */
	'max_request_size_in_kb' => 250,

	/**
     * Define the optional SSL context for your WebSocket connections.
     * You can see all available options at: http://php.net/manual/en/context.ssl.php
     */
	'ssl' => [
		/**
		 * Path to local certificate file on filesystem. It must be a PEM encoded file which
		 * contains your certificate and private key. It can optionally contain the
		 * certificate chain of issuers. The private key also may be contained
		 * in a separate file specified by local_pk.
		 */
		'local_cert' => null,

		/**
		 * Path to local private key file on filesystem in case of separate files for
		 * certificate (local_cert) and private key.
		 */
		'local_pk' => null,

		/**
		 * Passphrase for your local_cert file.
		 */
		'passphrase' => null,
	],

];
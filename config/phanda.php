<?php

return [

    'name' => environment('app.APPLICATION_NAME', 'Phanda'),

    'environment' => environment('app.APPLICATION_ENVIRONMENT', 'production'),

    'debug' => environment('app.APPLICATION_ALLOW_DEBUGGING', false),

    'url' => environment('app.APPLICATION_URL', 'http://localhost'),

    'providers' => [
    	// Core Phanda Service Providers
        \Phanda\Providers\Foundation\BootstrapKungfuServiceProviders::class,
        \Phanda\Providers\Http\ResponseServiceProvider::class,
        \Phanda\Providers\Caching\CachingServiceProvider::class,
		\Phanda\Providers\Logging\LoggingServiceProvider::class,
        \Phanda\Providers\Database\DatabaseServiceProvider::class,
        \Phanda\Providers\Bear\BearServiceProvider::class,
        \Phanda\Providers\Scene\SceneServiceProvider::class,
        \Phanda\Providers\Scene\Bamboo\BambooServiceProvider::class,

		// Your Applications Service Providers
        \Core\Providers\RouteServiceProvider::class
    ]

];
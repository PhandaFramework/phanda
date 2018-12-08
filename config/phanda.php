<?php

return [

    'name' => environment('app.APPLICATION_NAME', 'Phanda'),

    'environment' => environment('app.APPLICATION_ENVIRONMENT', 'production'),

    'debug' => environment('app.APPLICATION_ALLOW_DEBUGGING', false),

    'url' => environment('app.APPLICATION_URL', 'http://localhost'),

    'providers' => [
        \Phanda\Providers\Foundation\BootstrapKungfuServiceProviders::class,
        \Phanda\Providers\Scene\SceneServiceProvider::class,
        // Note: Any custom scene compiler should always be registered after the SceneServiceProvider.
        // \Phanda\Providers\Scene\Bamboo\BambooServiceProvider::class,

        \Core\Providers\RouteServiceProvider::class
    ]

];
<?php

return [
    'connections' => [
        // For documentation in regards to the configuration of database drivers
        // Please consult the Phanda docs for all of the configuration options.
        'default' => [
            'driver' => environment('database.DATABASE_DRIVER', 'mysql'),
            'host' => environment('database.DATABASE_HOST', '127.0.0.1'),
            'port' => environment('database.DATABASE_PORT', '3306'),
            'database' => environment('database.DATABASE_NAME', 'phanda'),
            'username' => environment('database.DATABASE_USERNAME', 'root'),
            'password' => environment('database.DATABASE_PASSWORD', '')
        ]
    ],

    'entity_location' => core_path('Model/Entity'),
    'table_location' => core_path('Model/Table')
];
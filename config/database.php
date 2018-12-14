<?php

return [
    'connections' => [
        'default' => [
            'driver' => environment('database.DATABASE_DRIVER', 'mysql'),
            'host' => environment('database.DATABASE_HOST', '127.0.0.1'),
            'database' => environment('database.DATABASE_NAME', 'localdatabase'),
            'username' => environment('database.DATABASE_USERNAME', 'localuser'),
            'password' => environment('database.DATABASE_PASSWORD', 'localpassword')
        ]
    ]
];
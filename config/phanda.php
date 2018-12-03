<?php

return [

    'name' => environment('APPLICATION_NAME', 'Phanda'),

    'environment' => environment('APPLICATION_ENVIRONMENT', 'production'),

    'debug' => environment('APPLICATION_ALLOW_DEBUGGING', false),

    'url' => environment('APPLICATION_URL', 'http://localhost'),

    'providers' => [

    ]

];
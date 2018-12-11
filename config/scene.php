<?php

return [
    'paths' => [
        assets_path('scenes')
    ],

    'error_scenes_path' => assets_path('scenes/errors'),

    'cachedPath' => environment('scene.CACHED_SCENE_PATH', realpath(storage_path('phanda/scenes')))
];
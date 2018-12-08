<?php

return [
    'paths' => [
        assets_path('scenes')
    ],

    'cachedPath' => environment('scene.CACHED_SCENE_PATH', realpath(storage_path('phanda/scenes')))
];
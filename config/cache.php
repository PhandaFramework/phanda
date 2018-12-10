<?php
    return [
      'base_path' => environment('cache.BASE_PATH', 'phanda'),
      'driver' => environment('cache.DRIVER', 'file')
    ];
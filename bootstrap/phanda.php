<?php

$phanda = new \Phanda\Foundation\Application(
    $_ENV['PHANDA_BASE_PATH'] ?? dirname(__DIR__)
);

$phanda->singleton(
    Phanda\Contracts\Http\Kernel::class,
    \Phanda\Foundation\Http\Kernel::class
);

$phanda->singleton(
    \Phanda\Contracts\Console\Kernel::class,
    \Phanda\Foundation\Console\Kernel::class
);

$phanda->singleton(
    \Phanda\Contracts\Exceptions\ExceptionHandler::class,
    \Phanda\Exceptions\ExceptionHandler::class
);

return $phanda;
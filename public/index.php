<?php

require __DIR__.'/../vendor/autoload.php';

/**
 * @var \Phanda\Contracts\Foundation\Application $phanda
 */
$phanda = require_once __DIR__.'/../bootstrap/phanda.php';

/**
 * @var \Phanda\Contracts\Http\Kernel $httpKernel
 */
$httpKernel = $phanda->create(\Phanda\Contracts\Http\Kernel::class);
$request = \Phanda\Foundation\Http\Request::capture();

$response = $httpKernel->handle(
    $request
);

$response->send();

$httpKernel->terminate($request, $response);
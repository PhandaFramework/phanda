<?php

use Phanda\Support\Facades\Routing\Router;

Router::get('home', '/', function() {
    return "Hello, World!";
});

Router::get('hello-person', '/hello/{name}', function($name) {
    return "Hello, {$name}!";
});

Router::get('test', '/test', function() {
    return "test";
});
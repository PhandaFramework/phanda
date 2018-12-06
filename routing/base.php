<?php

use Phanda\Support\Facades\Routing\Router;

Router::get('home', '/', function() {
    return "<h1>Hello, World! Welcome to Phanda</h1>";
});

Router::prefix('/hello')->group(function() {
   Router::get('hello-world', '/', function() {
        return "Hello, World!";
   });

   Router::get('hello-name', '/{name}', function($name) {
      return  "Hello, {$name}!";
   });
});
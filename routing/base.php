<?php

use Phanda\Support\Facades\Routing\Router;

Router::get('home', '/', function() {
    return "<h1>Welcome to Phanda.</h1>";
});

Router::prefix('/hello')->group(function() {
   Router::get('hello-world', '/', 'HelloWorldController@index');
   Router::get('hello-name', '/{name}', 'HelloWorldController@name');
});
<?php

use Phanda\Support\Facades\Routing\Router;

Router::get('home', '/', function() {
    return scene('welcome');
});

Router::prefix('/hello')->group(function() {
   Router::get('hello-world', '/', 'HelloWorldController@index');
   Router::get('hello-name', '/{name}', 'HelloWorldController@name');
});
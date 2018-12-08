<?php

use Phanda\Support\Facades\Routing\Router;
use Phanda\Support\Facades\Scene\Scene;

Router::get('home', '/', function() {
    return Scene::create('welcome');
});

Router::prefix('/hello')->group(function() {
   Router::get('hello-world', '/', 'HelloWorldController@index');
   Router::get('hello-name', '/{name}', 'HelloWorldController@name');
});
<?php

use Phanda\Support\Facades\Routing\Router;
use Phanda\Support\Facades\Scene\Scene;

Router::get('/', function() {
    return Scene::create('welcome');
}, 'home');

Router::prefix('/hello')->group(function() {
   Router::get('/', 'HelloWorldController@index', 'hello-world');
   Router::get('/{name}', 'HelloWorldController@name', 'hello-name');
});
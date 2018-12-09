<?php

use Phanda\Support\Facades\Routing\Router;
use Phanda\Support\Facades\Scene\Scene;

Router::get('/', function () {
    return Scene::create('welcome');
}, 'home');

Router::prefix('/hello')->name('hello')->group(function () {
    // By naming a group, it automatically prepends the name to subsequent routes.
    // I.e., this group is named 'hello' and the next route is named 'world'. This automatically
    // Get's prepended to be 'hello.world'
    Router::get('/', 'HelloWorldController@index', 'world');
    Router::get('/{name}', 'HelloWorldController@name', 'name');
});
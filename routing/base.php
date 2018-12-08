<?php

use Phanda\Support\Facades\Routing\Router;

Router::get('home', '/', function() {
    return view('welcome');
});

Router::prefix('/hello')->group(function() {
   Router::get('hello-world', '/', 'HelloWorldController@index');
   Router::get('hello-name', '/{name}', 'HelloWorldController@name');
});
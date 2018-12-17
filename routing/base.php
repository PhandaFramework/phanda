<?php

use Phanda\Support\Facades\Routing\Router;
use Phanda\Support\Facades\Routing\RouteBuilder;
use Phanda\Support\Facades\Scene\Scene;

Router::get('/', function () {
    return Scene::render('welcome');
}, 'home');

Router::prefix('/hello')->name('hello')->group(function () {
    // By naming a group, it automatically prepends the name to subsequent routes.
    // I.e., this group is named 'hello' and the next route is named 'world'. This automatically
    // Get's prepended to be 'hello.world'
    Router::get('/', 'HelloWorldController@index', 'world');
    Router::get('/{name}', 'HelloWorldController@name', 'name');
});

// This is an example of using the route builder to build a route fluently.
// Refer to the documentation for more information on the RouteBuilder
RouteBuilder::anyMethod()
    ->setUrl('/welcome')
    ->setScene('welcome', ['name' => 'Stranger'])
    ->setName('welcome')
    ->build();

Router::get('/test', function() {
	$table = new \Core\Model\Table\UsersTable();
	/** @var \Core\Model\Entity\User $entity */
	$entity = $table->get(2);

	$entity->firstname = "Johnathon";
	$table->saveEntity($entity);

	return responseManager()->createJsonResponse($entity);
});
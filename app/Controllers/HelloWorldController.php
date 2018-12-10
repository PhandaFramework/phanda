<?php

namespace App\Controllers;

use Phanda\Support\Facades\Scene\Scene;

class HelloWorldController extends \Phanda\Routing\Controller\AbstractController
{
    public function index()
    {
        // This is an example of using the ResponseManager to create a response. The response manager provides you
        // With an easy way to generate different responses needed in your application. Please look at the docs for
        // any further information.
        return responseManager()->createSceneResponse('welcome');
    }

    public function name($name)
    {
        $name = ucfirst(strtolower($name));

        // Here we are using the Scene facade to return a response to show you one of the many ways Phanda can
        // Handle the generation and rendering of responses. Please consult the documentation for further
        // Information on Phanda and Responses.
        return Scene::render('welcome', [
            "name" => $name
        ]);
    }
}
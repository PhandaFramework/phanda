<?php

namespace App\Controllers;

use Phanda\Support\Facades\Scene\Scene;

class HelloWorldController extends \Phanda\Routing\Controller\AbstractController
{
    public function index()
    {
        return Scene::create('welcome');
    }

    public function name($name)
    {
        $name = ucfirst(strtolower($name));

        return Scene::create('welcome', [
            "name" => $name
        ]);
    }
}
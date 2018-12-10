<?php

namespace App\Controllers;

use Phanda\Support\Facades\Scene\Scene;

class HelloWorldController extends \Phanda\Routing\Controller\AbstractController
{
    public function index()
    {
        return Scene::render('welcome');
    }

    public function name($name)
    {
        $name = ucfirst(strtolower($name));

        return Scene::render('welcome', [
            "name" => $name
        ]);
    }
}
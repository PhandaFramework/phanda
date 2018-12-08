<?php

namespace App\Controllers;

class HelloWorldController extends \Phanda\Routing\Controller\AbstractController
{
    public function index()
    {
        return scene('welcome');
    }

    public function name($name)
    {
        $name = ucfirst(strtolower($name));

        return scene('welcome', [
            "name" => $name
        ]);
    }
}
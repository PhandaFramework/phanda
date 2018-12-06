<?php

namespace App\Controllers;

class HelloWorldController extends \Phanda\Routing\Controller\AbstractController
{
    public function index()
    {
        return "<h1>Hello, World!</h1>";
    }

    public function name($name)
    {
        $name = ucfirst(strtolower($name));

        return "<h2>Hello, {$name}!</h2>";
    }
}
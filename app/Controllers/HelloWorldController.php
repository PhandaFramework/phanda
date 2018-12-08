<?php

namespace App\Controllers;

class HelloWorldController extends \Phanda\Routing\Controller\AbstractController
{
    public function index()
    {
        return view('welcome');
    }

    public function name($name)
    {
        $name = ucfirst(strtolower($name));

        return view('welcome', [
            "name" => $name
        ]);
    }
}
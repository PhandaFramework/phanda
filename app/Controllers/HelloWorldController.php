<?php

namespace App\Controllers;

class HelloWorldController extends \Phanda\Routing\Controller\AbstractController
{
    public function index()
    {
        return "<h1>Hello, World!</h1>";
    }
}
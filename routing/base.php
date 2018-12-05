<?php

router()->get('home', '/', function() {
    return "Hello, World!";
});

router()->get('hello-person', '/hello/{name}', function($name) {
    return "Hello, {$name}!";
});
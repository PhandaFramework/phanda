<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My New Application - Phanda Framework</title>

        <meta name="charset" content="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
        <link rel="icon" href="{{ config('phanda.url') }}/favicon.ico"/>
        <link rel="stylesheet" href="{{ config('phanda.url') }}/css/app.css">
    </head>
    <body>
        <div class="welcome">
            <img src="{{ config('phanda.url') }}/images/phanda-logo.png">
            <h1>Welcome to the <span>phanda</span>framework</h1>
            <h2>Hello, {{ $name ?? "World" }}!</h2>
            <div class="help-links">
                <a href="https://phandaframework.com" target="_blank">Phanda Website</a>
                <a href="https://phandaframework.com/docs" target="_blank">Documentation</a>
                <a href="https://phandaframework.com/news" target="_blank">News</a>
                <a href="https://gitlab.com/phanda/framework" target="_blank">Source Code</a>
            </div>
        </div>
    </body>
</html>
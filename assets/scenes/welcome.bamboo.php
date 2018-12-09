<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My New Application - Phanda Framework</title>

        <meta name="charset" content="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
        <link rel="icon" href="{{ config('phanda.url') }}/favicon.ico"/>

        <style>
            html, body {
                color: #11100E;
                font-family: 'Comfortaa', sans-serif!important;
                font-weight: 300;
                height: 100vh;
                margin: 0;
            }
            .welcome {
                text-align: center;
                max-width: 1000px;
                width: 100%;
                position: absolute;
                transform: translate(-50%, -50%);
                top: 50%;
                left: 50%;
                padding: 50px;
            }
            .welcome h1 {
                font-size: 3rem;
            }
            .welcome h1 span {
                color: #EA8C68;
            }
            .welcome h2 {
                font-size: 2rem;
            }
        </style>
    </head>
    <body>
        <div class="welcome">
            <h1>Welcome to the <span>phanda</span>framework</h1>
            <h2>Hello, {{ $name ?? "World" }}!</h2>
        </div>
    </body>
</html>
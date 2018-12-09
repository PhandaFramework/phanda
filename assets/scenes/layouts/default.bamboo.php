<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@renderstage('title', 'My New Application') - Phanda Framework</title>

        <meta name="charset" content="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
        <link rel="icon" href="{{ config('phanda.url') }}/favicon.ico"/>
        <link rel="stylesheet" href="{{ config('phanda.url') }}/css/app.css">
    </head>
    <body>
        @renderstage('content')
    </body>
</html>
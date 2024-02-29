<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width , inital-scale=1.0">
        @vite(['resources/css/app.css', 'resources/css/app.js'])
    </head>
    <body>
        <div class = "container p-5">
            {{ $article-> body}}
        </div>
    </body>
</html>
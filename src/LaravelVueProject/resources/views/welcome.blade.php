<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <h1>
            Vite のテストです
        </h1>
        <div id="app">
            <example-component></example-component>
        </div>
    </body>
</html>
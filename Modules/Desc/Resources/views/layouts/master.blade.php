<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Desc</title>

       @vite('Modules/Front/Resources/assets/css/app_front.css')
    </head>
    <body class="p-2">
        <div id="app">
            <x-front-header></x-front-header>
            <div class="container-xxl">
                @yield('content')
            </div>
            <x-desc-tost-component></x-desc-tost-component>
        </div>
        @vite('Modules/Front/Resources/assets/js/app_front.js')
    </body>
</html>

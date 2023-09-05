<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Front</title>

       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-front', 'Resources/assets/sass/app.scss') }} --}}
       @vite('Modules/Front/Resources/assets/css/app_front.css')

    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>
        @vite('Modules/Front/Resources/assets/js/app_front.js')
    </body>
</html>

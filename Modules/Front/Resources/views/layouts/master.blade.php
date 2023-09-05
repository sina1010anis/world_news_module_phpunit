<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Front</title>

       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-front', 'Resources/assets/sass/app.scss') }} --}}
       @vite('resources/css/app.css')

    </head>
    <body>
        <div id="app">
            <button @click="test_app" >test</button>
            <wel></wel>
            {{-- @yield('content')
            <h1>@{{version}}</h1> --}}

            {{-- Laravel Vite - JS File --}}
            {{-- {{ module_vite('build-front', 'Resources/assets/js/app.js') }} --}}
        </div>
        @vite('Modules/Front/Resources/assets/js/app.js')
    </body>
</html>

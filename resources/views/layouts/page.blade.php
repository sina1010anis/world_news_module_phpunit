<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Auth</title>
    @vite('Modules/Front/Resources/assets/css/app_front.css')
</head>
<body>
    <div id="app">
        <div class="container-xxl">
            @yield('index')
        </div>
    </div>
    @vite('Modules/Front/Resources/assets/js/app_front.js')

</body>
</html>

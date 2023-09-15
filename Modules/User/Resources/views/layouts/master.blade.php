<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module User</title>

       @vite('Modules/Front/Resources/assets/css/app_front.css')

    </head>
    <body class="p-2">
        <div id="app">
            <div class="container-xxl">
                <x-user-header-profile></x-user-header-profile>
                <div class="row mt-2 " style="height: 75vh">
                    <div class="col-12 col-md-10 p-1 mt-3 mt-md-0">
                        <div class="w-100 h-100 shadow border-1 p-3 bg-menu-user rounded-2">
                            @yield('content')
                        </div>
                    </div>
                    <div class="col-12 col-md-2  p-1 mt-3 mt-md-0">
                        <div class="w-100 h-100 shadow rounded-2 p-3 text-center bg-menu-user">
                            <a class="d-block my-font-ISM my-f-13 my-color-b-800 " href="/">خبر های من</a>
                            <a class="d-block my-font-ISM my-f-13 my-color-b-800 mt-5" href="/">کامنت های من</a>
                            <a class="d-block my-font-ISM my-f-13 my-color-b-800 mt-5" href="/">خبر های ذخیره شده</a>
                            <a class="d-block my-font-ISM my-f-13 my-color-b-800 mt-5" href="/">خبر های گزارش شده</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @vite('Modules/Front/Resources/assets/js/app_front.js')
    </body>
</html>

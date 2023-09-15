@extends('layouts.page')

@section('index')
    <div class="w-100 d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="box-auth shadow bg-white p-3 rounded-1">
            <h3 class="my-font-ISM my-color-b-600 text-center">ورود به پنل</h3>
            <hr>
            <form action="{{route('login')}}" method="post" dir="rtl">
                @csrf

                <div class="mb-3">
                    <label class="form-check-label my-font-ISM my-f-11 my-color-b-500" for="login_register_email">ایمیل:</label>
                    <input type="text" name="email" class="form-control  my-font-ISM my-f-11" id="login_register_email">
                </div>
                @error('email')
                    <div class="alert alert-danger my-font-ISM my-f-10 p-1 text-center" dir="rtl" role="alert">
                        {{$message}}
                    </div>
                @enderror
                <div class="mb-3">
                    <label class="form-check-label my-font-ISM my-f-11 my-color-b-500" for="login_register_password">رمز عبور:</label>
                    <input type="password" name="password" class="form-control  my-font-ISM my-f-11" id="login_register_password">
                </div>
                @error('password')
                    <div class="alert alert-danger my-font-ISM my-f-10 p-1 text-center" dir="rtl" role="alert">
                        {{$message}}
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary my-font-ISM my-f-12">ورود</button>
            </form>

        </div>
    </div>
@endsection

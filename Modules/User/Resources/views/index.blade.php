@extends('user::layouts.master')

@section('content')
<div class="row">
    <div class="col-12 d-flex align-items-center justify-content-between">
        <button @click="openPageNewPost()" class="btn my-btn-g my-font-ISM my-f-12">ایجاد پست جدید</button>
        <div class="my-f-16 my-font-ISM my-color-b-900">خبر های من </div>
    </div>
    <hr class="mt-2">
    <div class="col-12 overflow-y-scroll " style="height: 65vh;">
        @foreach (auth()->user()->posts as $post)
            <div dir="rtl"  class="w-100  p-2 shadow mt-2 rounded-1 d-flex justify-content-end align-items-center">
                <img src="{{$post->image_min}}" style="width: 150px;height: 150px;" class="rounded-1" alt="{{$post->title}}">
                <a href="{{route('more.post', ['send' => $post->title])}}" class="mx-2 my-color-b-800 my-font-ISM my-f-14">{{$post->title}}</a>

                <div class="me-auto d-none d-md-inline">
                    <span class="mx-2">
                        <i class="bi bi-star" ></i>: {{$post->like}}
                    </span>
                    <span>
                        <i class="bi bi-binoculars" ></i>: {{$post->view}}
                    </span>
                    <button class="btn my-btn-r my-font-ISM my-f-11 mx-2">
                        <i class="bi bi-trash3 my-f-15-i my-pos-rel mx-1" style="top: 2px"></i>
                        <span class="me-1">حذف</span>
                    </button>
                    <button class="btn my-btn-b my-font-ISM my-f-11">
                        <i class="bi bi-pencil my-f-15-i my-pos-rel mx-1" style="top: 2px"></i>
                        <span class="me-1">ویرایش</span>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="my-obj-center p-3 bg-white rounded-1 shadow  box-post z-3">
    <h3 class="my-font-ISM my-color-b-600 text-center">ایجاد خبر</h3>
    <hr>
    <form action="{{route('new.post')}}" method="post" dir="rtl" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-check-label my-font-ISM my-f-11 my-color-b-500" for="title">موضوع:</label>
            <input type="text" name="title" class="form-control  my-font-ISM my-f-11" id="title">
        </div>
        @error('title')
            <div class="alert alert-danger my-font-ISM my-f-10 p-1 text-center" dir="rtl" role="alert">
                {{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="formFile" class="form-label my-font-ISM my-f-11 my-color-b-500">اپلود عکس ابتدا:</label>
            <input class="form-control form-control-sm" type="file" name="image_min" id="formFile">
        </div>
        @error('image_min')
            <div class="alert alert-danger my-font-ISM my-f-10 p-1 text-center" dir="rtl" role="alert">
                {{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="formFile2" class="form-label my-font-ISM my-f-11 my-color-b-500">اپلود عکس اصلی:</label>
            <input class="form-control form-control-sm" type="file" name="image_max_pc" id="formFile2">
        </div>
        @error('image_max_pc')
            <div class="alert alert-danger my-font-ISM my-f-10 p-1 text-center" dir="rtl" role="alert">
                {{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label my-font-ISM my-f-11 my-color-b-500">متن خبر:</label>
            <textarea class="form-control  my-font-ISM my-f-11" name="body" id="exampleFormControlTextarea1"></textarea>
        </div>
        @error('body')
            <div class="alert alert-danger my-font-ISM my-f-10 p-1 text-center" dir="rtl" role="alert">
                {{$message}}
            </div>
        @enderror

        <label for="menu_list" class="form-label my-font-ISM my-f-11 my-color-b-500">انتخاب منو :</label>
        <select class="form-select form-select-sm my-font-ISM my-f-11" id="menu_list" name="menu_id" aria-label="Default select example">
            @foreach ($menus as $menu)
                <option value="{{$menu->id}}">{{$menu->name}}</option>
            @endforeach
        </select>
        <div class="mt-3">
            <button type="button" @click="closePageNewPost()" class="btn mx-1 my-btn-d my-font-ISM my-f-11">بستن</button>
            <button type="submit" class="btn mx-1 my-btn-g my-font-ISM my-f-11">ثبت</button>
        </div>
    </form>
</div>
<div class="w-100 h-100 my-pos-fix bg-dark opacity-25 top-0 right-0 p-0 m-0 page-hide z-2"></div>

@endsection

@extends('user::layouts.master')

@section('content')
<div class="row">
    <div class="col-12 d-flex align-items-center justify-content-between">
        <button class="btn my-btn-g">test</button>
        <div class="my-f-16 my-font-ISM my-color-b-900">خبر های من </div>
    </div>
    <hr>
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
@endsection

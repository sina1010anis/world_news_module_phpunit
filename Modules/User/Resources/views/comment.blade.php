@extends('user::layouts.master')

@section('content')

<div class="row">
    <div dir="rtl" class="col-12 d-flex align-items-center justify-content-between">
        <div class="my-f-16 my-font-ISM my-color-b-900">کامنت های من</div>
    </div>
    <hr class="mt-3">
    <div class="col-12 overflow-y-scroll " style="height: 65vh;">
        @foreach (auth()->user()->comments as $comment)
            <div dir="rtl"  class="w-100  p-2 shadow mt-3 rounded-1">
                <p class="mx-2 my-color-b-800 my-font-ISM my-f-14">{{$comment->title}}</p>
                <br>
                <p class="mx-2 my-color-b-800 my-font-ISM my-f-13">{{$comment->body}}</p>
                <div class="d-flex justify-content-end align-items-center">
                    @if ($comment->status == 'safe')
                        <span class="p-2 rounded-1 my-btn-g my-font-ISM my-f-11 mx-2">فعال</span>
                    @else
                        <span class="p-2 rounded-1 my-btn-r my-font-ISM my-f-11 mx-2">غیر فعال</span>
                    @endif

                    <a href="{{route('more.post', ['send' => $comment->post->title])}}" class="btn my-btn-b my-font-ISM my-f-11">خبر؟</a>
                </div>
            </div>
        @endforeach
    </div>


</div>

@endsection

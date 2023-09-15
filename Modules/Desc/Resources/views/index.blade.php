@extends('desc::layouts.master')

@section('content')
@if (session('msg_error'))
    <div class="alert alert-danger mt-4 text-center" role="alert">
        {{session('msg_error')}}
    </div>
@endif
@if (session('msg_ok'))
    <div class="alert alert-success mt-4 text-center" role="alert">
        {{session('msg_ok')}}
    </div>
@endif
<div class="row mt-4">
    <div class="col-12 box-news-front rounded-2 p-0 m-0 overflow-hidden" dir="rtl">
        <div class="col-12 back-desc d-flex justify-content-center align-items-center" style="background-image: url('/storage/ST.jpg')">
            <div class="box-name-news bg-dark py-3 px-5 rounded-2 text-white">
                <p dir="rtl" class="my-font-IYB text-center my-f-20"><b>{{$send->title}}</b></p>
            </div>
        </div>
    </div>
    <div class="col-12 p-2 mt-3">
        <div class="d-flex justify-content-between align-content-center my-font-ISM my-f-12 my-color-b-500">
            <span>{{jdate($send->created_at)->format('%B %d، %Y')}}</span>
            <span title="تعداد نمایش">
                <i class="bi bi-eye my-f-15 my-pos-rel" style="top: 2px"></i>
                {{$send->view}}
            </span>
            <span title="تعداد نمایش">
                <i class="bi bi-star my-f-15 my-pos-rel" style="top: 2px"></i>
                {{$send->like}}
            </span>
            <a href="{{route('menu.view', ['send' => $send->menu->name])}}">{{$send->menu->name}}</a>
        </div>
        <div dir="rtl" class="bg-white mt-2 my-font-ISM my-f-15 my-color-b-800" style="line-height: 30px">
            {{$send->body}}
        </div>
    </div>
    <hr class="mt-2">
    <div class="col-12">
        <h3 dir="rtl" class="my-font-ISM my-color-b-900">نظرات:</h3>
        <div class="row">
            <div class="col-12 p-2 rounded-2">
                @foreach ($send->comments->where('status', 'safe') as $comment)
                    <x-desc-comment comment="{{$comment->body}}" titleComment="{{$comment->title}}"></x-desc-comment>
                @endforeach
            </div>
        </div>
    </div>
</div>
@auth
    @if ($send->user_id != auth()->user()->id)
        <div @click="openPageNewComment()" class="new-comment btn-description shadow my-pointer d-flex justify-content-center align-items-center">
            <i class="bi bi-chat-dots my-color-b"></i>
        </div>
        <div v-if="is_like == null" @click="likePost({{$send->id}})" class="new-save btn-description shadow my-pointer d-flex justify-content-center align-items-center">
            @if (Illuminate\Support\Facades\Session::has('l_'.auth()->user()->id.'_'.$send->id) )
                <i class="bi bi-star-fill my-color-b"></i>
            @else
                <i class="bi bi-star my-color-b"></i>
            @endif
        </div>
        <div v-if="is_like != null" @click="likePost({{$send->id}})" class="new-save btn-description shadow my-pointer d-flex justify-content-center align-items-center">
            <i :class="(is_like == 'Like') ? 'bi bi-star-fill my-color-b' : 'bi bi-star my-color-b'"></i>
        </div>
        <x-desc-page-new-comment postId="{{$send->id}}"></x-desc-page-new-comment>
    @endif
@endauth
@endsection

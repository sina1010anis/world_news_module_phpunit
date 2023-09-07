@extends('front::layouts.master')

@section('content')
    <div class="row mt-4">
        <div class="col-12 col-md-10 m-0 p-0 p-3 box-news-front rounded-2" dir="rtl">
            @foreach ($posts as $post)
                <div class="item-new my-pos-rel  row mt-3" style="height: 150px">
                    <div class="back-image-min h-100 w-25 col-3" style="background-image: url('{{$post->image_min}}')"></div>
                    <div dir="rtl" class="text-new h-100 w-75 p-2 col-9">
                        <h4 class="my-font-ISM my-color-b-800">{{$post->title}}</h4>
                        <a href="{{route('menu.view', ['send' => $post->menu->name])}}" class="my-color-b-400 my-f-12 my-font-ISM">{{$post->menu->name}}</a>
                        <p class="my-color-b-800 my-f-11 mt-2 my-font-ISM">
                            {{Str::limit( $post->body, 250, '...')}}
                        </p>
                        <a href="{{route('more.post', ['send' => $post->title])}}" class="btn-more-new d-flex justify-content-center align-items-center"><i class="bi bi-arrow-down-left-circle"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-2 d-none d-md-block px-3">
            <div class="w-100 h-100 hearer d-flex overflow-hidden box-filter-front flex-column justify-content-top align-items-center rounded-2">
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">جدیدترین</a>
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">خبر های امروز</a>
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">پربازدیدترین</a>
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">مورد پسند</a>
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">قدیمی ترین</a>
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">انتخاب سردبیر</a>
            </div>
        </div>
    </div>
@endsection

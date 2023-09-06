@extends('front::layouts.master')

@section('content')
    <div class="row mt-4">
        <div class="col-12 col-md-10 m-0 p-0 p-3 box-news-front rounded-2" dir="rtl">
            <div class="item-new my-pos-rel  row mt-3" style="height: 150px">
                <div class="back-image-min h-100 w-25 bg-info col-3" style="background-image: url('storage/image_test.jpg')"></div>
                <div dir="rtl" class="text-new h-100 w-75 col-9">
                    <h3>Title test news</h3>
                    <a href="/" class="my-color-b-400 my-f-13">name menu</a>
                    <p class="my-color-b-800 my-f-11 mt-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi reiciendis labore nostrum! Ad obcaecati fugit sequi, ea molestiae a sunt quod sed tempore harum perferendis iste voluptas dolorum, aperiam quos.
                    </p>
                    <a href="/" class="btn-more-new d-flex justify-content-center align-items-center"><i class="bi bi-arrow-down-left-circle"></i></a>
                </div>
            </div>
            <div class="item-new my-pos-rel  row mt-3" style="height: 150px">
                <div class="back-image-min h-100 w-25 bg-info col-3" style="background-image: url('storage/image_test.jpg')"></div>
                <div dir="rtl" class="text-new h-100 w-75 col-9">
                    <h3>Title test news</h3>
                    <a href="/" class="my-color-b-400 my-f-13">name menu</a>
                    <p class="my-color-b-800 my-f-11 mt-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi reiciendis labore nostrum! Ad obcaecati fugit sequi, ea molestiae a sunt quod sed tempore harum perferendis iste voluptas dolorum, aperiam quos.
                    </p>
                    <a href="/" class="btn-more-new d-flex justify-content-center align-items-center"><i class="bi bi-arrow-down-left-circle"></i></a>
                </div>
            </div>

        </div>
        <div class="col-2 d-none d-md-block px-3">
            <div class="w-100 h-100 hearer d-flex overflow-hidden box-filter-front flex-column justify-content-top align-items-center rounded-2">
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">تکنولوژی</a>
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">تکنولوژی</a>
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">تکنولوژی</a>
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">تکنولوژی</a>
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">تکنولوژی</a>
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">تکنولوژی</a>
                <a class="my-font-ISM px-3 my-color-b-600 my-f-13 item-filter-front py-3 my-pointer d-block w-100 text-center">تکنولوژی</a>
            </div>
        </div>
    </div>
@endsection

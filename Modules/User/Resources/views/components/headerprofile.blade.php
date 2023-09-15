@if (auth()->check())
<div class="row rounded-1 shadow header-profile-menu">
    <div class="col-12 col-md-10 order-2 order-md-1 p-2 d-none d-md-flex  align-items-center justify-content-between" style="height: 20vh;max-height: 20vh">
        <div class="item-profile d-flex justify-content-center align-items-center flex-column rounded-5 overflow-hidden profile-user">
            <span><i class="bi bi-chat" style="font-size: 35px"></i></span>
            <p class="my-font-ISM ">{{auth()->user()->comments->count()}}</p>
        </div>
        <div class="item-profile d-flex justify-content-center align-items-center flex-column rounded-5 overflow-hidden profile-user">
            <span><i class="bi bi-binoculars" style="font-size: 35px"></i></span>
            <p class="my-font-ISM ">{{auth()->user()->posts->sum('view')}}</p>
        </div>
        <div class="item-profile d-flex justify-content-center align-items-center flex-column rounded-5 overflow-hidden profile-user">
            <span><i class="bi bi-star" style="font-size: 35px"></i></span>
            <p class="my-font-ISM ">{{auth()->user()->posts->sum('like')}}</p>
        </div>
    </div>
    <div class="col-12 p-1 header-profile-menu d-flex align-items-center justify-content-center flex-column col-md-2 order-1 order-md-2 p-2" style="height: 20vh;max-height: 20vh">
        <div>
            <div class="image-user rounded-5 overflow-hidden">
                <img src="{{url('storage/profile.jpg')}}" class="w-100 h-100" alt="image_profile">
            </div>
        </div>

    </div>
</div>
@endif

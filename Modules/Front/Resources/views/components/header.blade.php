<div class="container-fluid">
    <div class="row">
        @if(auth()->check())
            <div class="col-12 d-none d-md-flex p-3 hearer box-header shadow rounded-2" dir="rtl">
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="me-auto logo rounded-2 p-2">
                    <img src="{{url('storage/logo.png')}}" alt="" height="100">
                </a>
            </div>
        @else
            <div class="col-10 d-none d-md-flex p-3 hearer box-header shadow rounded-2" dir="rtl">
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="my-font-ISM px-3 my-color-b-600 my-f-13">تکنولوژی</a>
                <a href="/" class="me-auto logo rounded-2 p-2">
                    <img src="{{url('storage/logo.png')}}" alt="" height="100">
                </a>
            </div>
            <div class="col-2 d-none d-md-block p-3 ">
                <div class="w-100 h-100 hearer d-flex  flex-column justify-content-center align-items-center shadow rounded-2">
                    <div class="image-user-header mb-2 overflow-hidden shadow">
                        <img src="{{url('storage/profile.jpg')}}" class="w-100 h-100"/>
                    </div>
                    <a href="/" class="my-f-13 my-color-b-700 my-font-ISM my-select-none">نام کاربری</a>
                </div>
            </div>
        @endif
        <div class="col-12 d-md-none p-3 hearer box-header-mobile shadow d-flex" @click="openMenu" dir="rtl">
            <div class="py-1 px-2 mx-3 rounded-3" style="background-color: #d6d6d6">
                <i class="bi bi-list my-f-18 my-color-b-900"></i>
            </div>
            <a href="/" class="py-1  px-2 rounded-3" style="background-color: #d6d6d6">
                <i class="bi bi-person my-f-18 my-color-b-900"></i>
            </a>
            <a href="/" class="py-1 px-2 rounded-3 me-auto">
                <img src="{{url('storage/logo.png')}}" alt="" height="30">
            </a>
        </div>
    </div>
</div>

<div class="menu-mobile d-flex align-content-start flex-column shadow">
    <a href="/" class=" px-3 my-color-b-600 text-end my-3">
        <span class="my-font-ISM my-f-13 me-2">تکنولوژی</span>
        <i class="bi bi-laptop my-f-19"></i>
    </a>
    <a href="/" class=" px-3 my-color-b-600 text-end my-3">
        <span class="my-font-ISM my-f-13 me-2">تکنولوژی</span>
        <i class="bi bi-laptop my-f-19"></i>
    </a>
    <a href="/" class=" px-3 my-color-b-600 text-end my-3">
        <span class="my-font-ISM my-f-13 me-2">تکنولوژی</span>
        <i class="bi bi-laptop my-f-19"></i>
    </a>
    <a href="/" class=" px-3 my-color-b-600 text-end my-3">
        <span class="my-font-ISM my-f-13 me-2">تکنولوژی</span>
        <i class="bi bi-laptop my-f-19"></i>
    </a>
    <a href="/" class=" px-3 my-color-b-600 text-end my-3">
        <span class="my-font-ISM my-f-13 me-2">تکنولوژی</span>
        <i class="bi bi-laptop my-f-19"></i>
    </a>
    <a class=" px-3 text-end my-3 text-danger" @click="closeMenuMobile">
        <span class="my-font-ISM my-f-13 me-2">بستن منو</span>
        <i class="bi bi-box-arrow-right my-f-19-i" style="top:4px"></i>
    </a>

</div>
<div class="page-hide" @click="closeMenuMobile"></div>

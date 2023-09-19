<template>
    <div class="row mt-2">
        <div class="col-12 col-md-10 m-0 p-0 p-3 box-news-front rounded-2" dir="rtl">
            <div v-for="(post, index) in post_menu" @key="index" class="item-new my-pos-rel  row mt-3" style="height: 150px">
                <div class="back-image-min h-100 w-25 col-3" :style="'background-image: url('+'/'+ post.image_min +')'"></div>
                <div dir="rtl" class="text-new h-100 w-75 p-2 col-9">
                    <h4 class="my-font-ISM my-color-b-800"><b>{{post.title}}</b></h4>
                    <p class="my-color-b-800 my-f-11 mt-2 my-font-ISM">
                        {{ post.body.substring(0, 250)}}
                     </p>
                    <a :href="'/more/'+post.title" class="btn-more-new d-flex justify-content-center align-items-center"><i class="bi bi-arrow-down-left-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-2 p-2 order-1 order-md-2">
            <div class="w-100 rounded-1 p-2 item-profile h-100 shadow">
                <p class="my-font-ISM my-color-b-700 my-f-16 text-end">جستوجو دقیق</p>
                <hr>
                <div dir="rtl" class=" p-2 rounded-1">
                    <label for="menu_list" class="form-label my-font-ISM my-f-11 my-color-b-500">انتخاب منو :</label>
                    <slot name="select"></slot>
                </div>
                <div class="form-check form-switch rounded-1 mt-3 d-flex  justify-content-between align-items-center">
                    <input class="form-check-input my-pointer " type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label my-pointer my-font-ISM my-f-11 my-color-b-500 text-start my-select-none" dir="rtl" for="flexSwitchCheckChecked">انتخاب سردبیر</label>
                </div>
                <div style="background-color: none!important">
                    <div class="form-check form-switch rounded-1 mt-3 d-flex  justify-content-between align-items-center">
                        <input class="form-check-input my-pointer " type="checkbox" role="switch" id="betdate" checked>
                        <label class="form-check-label  my-pointer my-font-ISM my-f-11 my-color-b-500 text-start my-select-none" dir="rtl" for="betdate">بین دو تاریخ </label>
                    </div>
                    <div class="d-flex justify-content-between align-items-center" >
                        <input type="text" style="background-color: none!important"  class="w-50 my-font-ISM my-f-11 my-color-b-600 text-center" placeholder="از تاریخ">
                        <input type="text" style="background-color: none!important"  class="w-50 my-font-ISM my-f-11 my-color-b-600 text-center" placeholder="تا تاریخ">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <input type="text"  style="background-color: none!important" class="w-100 my-font-ISM my-f-11 my-color-b-600 text-center" placeholder="پست های تاریخ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import lodash from 'lodash'

export default {
    name: 'FilterVue',
    methods: {
        test_app() {
            alert('test')
        }
    },
    props:{
        post_menu: Object,
        menu: Object,
        menus: Object,
    },
    comments:{
        lodash:lodash
    }
}
</script>

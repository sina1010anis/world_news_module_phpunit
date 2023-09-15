import {createApp} from 'vue/dist/vue.esm-bundler';
import Wel from "./components/Wel.vue";
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-icons/font/bootstrap-icons.css'
import '../css/app_front.css'
import $ from 'jquery'
import axios from 'axios';

createApp({
    data:()=>({
        is_like:null,
        tost_data:null
    }),
    methods:{
        test_app()
        {
            alert('good test')
        },
        fadeInHide(){
            $('.page-hide').fadeIn()
        },
        openMenu()
        {
            this.fadeInHide()
            $('.menu-mobile').animate({right:0})
        },
        fadeOutHide(){
            $('.page-hide').fadeOut()
        },
        closeMenuMobile(){
            this.fadeOutHide()
            $('.menu-mobile').animate({right:'-300px'})
        },
        openPageNewComment(){
            $('.page-new-comment').stop().fadeIn();
            $('.page-hide').stop().fadeIn();
        },
        closePageNewComment(){
            $('.page-new-comment').stop().fadeOut();
            $('.page-hide').stop().fadeOut();
        },
        tost (text) {
            this.tost_data = text
            $('.tost').animate({opacity: 0.8});

            setTimeout(()=>{
                $('.tost').animate({opacity: 0});
            }, 3500)
        },
        hideTost(){
            $('.tost').animate({opacity: 0});
        },
        likePost(id){
            axios.post('/more/like/post', {id:id})
            .then((res)=>{
                if(res.data == 'Like'){
                    this.tost('با تشکر از نظر شما.');
                }if(res.data == 'Delete Like'){
                    this.tost('شما قبلا این پست را لایک کرده اید و حال لاک شما حذف شد.');
                }else{
                    this.tost('پست های شما زیر 30 لایک دریافت کرده انند.');
                }

            }).catch((res)=>{
                console.log(res.data);
            })
        },
        openPageNewPost(){
            $('.box-post').stop().fadeIn();
            $('.page-hide').stop().fadeIn();
        },
        closePageNewPost(){
            $('.box-post').stop().fadeOut();
            $('.page-hide').stop().fadeOut();
        }
     },components:{
        wel:Wel
     }
  }).mount("#app");

// app.data({
//     version: 'V3s vuejs'
// })


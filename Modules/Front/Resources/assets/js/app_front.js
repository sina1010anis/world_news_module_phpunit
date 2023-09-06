import {createApp} from 'vue/dist/vue.esm-bundler';
import Wel from "./components/Wel.vue";
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-icons/font/bootstrap-icons.css'
import '../css/app_front.css'
import $ from 'jquery'

createApp({
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
            $('.menu-mobile').animate({right:'-250px'})
        }
     },components:{
        wel:Wel
     }
  }).mount("#app");

// app.data({
//     version: 'V3s vuejs'
// })


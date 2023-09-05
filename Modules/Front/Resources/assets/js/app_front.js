import {createApp} from 'vue/dist/vue.esm-bundler';
import Wel from "./components/Wel.vue";
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-icons/font/bootstrap-icons.css'
import '../css/app_front.css'

createApp({
    methods:{
        test_app()
        {
            console.log('The app is working')
        }
     },components:{
        wel:Wel
     }
  }).mount("#app");

// app.data({
//     version: 'V3s vuejs'
// })


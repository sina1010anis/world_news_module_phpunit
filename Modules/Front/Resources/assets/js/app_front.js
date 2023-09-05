import {createApp} from 'vue/dist/vue.esm-bundler';
import Wel from "./components/Wel.vue";


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


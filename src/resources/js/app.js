import './bootstrap';
import Vue from 'vue'
import router from './router'
import store from './store'
import Toasted from 'vue-toasted'
import VueScrollTo from 'vue-scrollto'
import App from './App.vue'

import Alpine from 'alpinejs';
Vue.use(Toasted, {
  position: 'bottom-center',
  duration: 2000,
})

 
Vue.use(VueScrollTo)

new Vue({
    el: '#app',
    router,
    store,
    render (h) {
      return h(App);
    },
})


window.Alpine = Alpine;

Alpine.start();

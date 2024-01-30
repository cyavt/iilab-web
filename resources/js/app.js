// import VueRouter from 'vue-router'

// Vue.use(VueRouter)

window.$ = window.jQuery = require('jquery');

require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('home-component', require('./components/page/home/IndexHome.vue').default);

const app = new Vue({
    el: '#app',
});

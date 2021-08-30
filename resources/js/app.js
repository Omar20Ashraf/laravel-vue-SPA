require('./bootstrap');

import Vue from 'vue'

import VueRouter from 'vue-router'

import routes from './routes'


window.Vue = Vue

Vue.use(VueRouter)


const app = new Vue({
    el: '#app',
    
    router:new VueRouter(routes)
});

require('./bootstrap');
import Vue from 'vue';
import ScrollLink from './components/smooth-scroll.vue';
Window.Vue = require('vue');
Vue.component('scroll-link', ScrollLink);
var app = new Vue({
    el: "#app"
})


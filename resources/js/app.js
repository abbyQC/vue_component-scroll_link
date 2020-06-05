require('./bootstrap');
import Vue from 'vue';
import ScrollLink from './components/smooth-scroll.vue';
import dropdown from './components/dropdown.vue';
Window.Vue = require('vue');
Vue.component('scroll-link', ScrollLink);
Vue.component('dropdown', dropdown);
var app = new Vue({
    el: "#app"
})


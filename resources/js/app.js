require('./bootstrap');
import Vue from 'vue';
import ScrollLink from './components/smooth-scroll.vue';
import dropdown from './components/dropdown.vue';
import visible from './components/conditional-visible.vue';
import modal from './components/modal';
Window.Vue = require('vue');
Vue.component('scroll-link', ScrollLink);
//Vue.component('dropdown', dropdown);
Vue.component('visible', visible);
Vue.component('modal',modal);
new Vue({
    el: "#app"
})


require('./bootstrap');
import Vue from 'vue';
import ScrollLink from './components/smooth-scroll.vue';
import dropdown from './components/dropdown.vue';
import visible from './components/conditional-visible.vue';
Window.Vue = require('vue');
Vue.component('scroll-link', ScrollLink);
//Vue.component('dropdown', dropdown);
Vue.component('visible', visible);
new Vue({
    el: "#app"
})


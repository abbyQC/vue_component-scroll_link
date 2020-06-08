require('./bootstrap');
import Vue from 'vue';
import Modal from './plugins/modal/ModalPlugin';
import ScrollLink from './components/smooth-scroll.vue';
import dropdown from './components/dropdown.vue';
import visible from './components/conditional-visible.vue';
import confirmDialog from './components/confirm-dialog.vue';
Window.Vue = require('vue');
Vue.component('scroll-link', ScrollLink);
//Vue.component('dropdown', dropdown);
Vue.component('visible', visible);
Vue.component('confirm-dialog', confirmDialog);
Vue.use(Modal);
new Vue({
    el: "#app"
})


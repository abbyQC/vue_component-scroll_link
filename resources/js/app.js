require('./bootstrap');
import Vue from 'vue';
import Modal from './plugins/modal/ModalPlugin';
import ScrollLink from './components/smooth-scroll.vue';
import dropdown from './components/dropdown.vue';
import visible from './components/conditional-visible.vue';
import confirmDialog from './components/confirm-dialog.vue';
import confirmButton from './components/confirmButton.vue';
Window.Vue = require('vue');
Vue.use(Modal);
Vue.component('scroll-link', ScrollLink);
//Vue.component('dropdown', dropdown);
Vue.component('visible', visible);
Vue.component('confirm-dialog', confirmDialog);
Vue.component('confirmButton', confirmButton);

new Vue({
    el: "#app",
    methods: {
        confirm(message) {
            this.$modal.dialog(message).then(confirmed => {
                confirmed ? alert('Proceed') : alert('Cancel');
            });
        }
    }

})


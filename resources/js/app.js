require('./bootstrap');
import Vue from 'vue';
import Modal from './plugins/modal/ModalPlugin';
import ScrollLink from './components/smooth-scroll.vue';
import dropdown from './components/dropdown.vue';
import visible from './components/conditional-visible.vue';
import confirmDialog from './components/confirm-dialog.vue';
import confirmButton from './components/confirmButton.vue';
import tabs from './components/Tabs.vue';
import tab from './components/Tab.vue';
Window.Vue = Vue;
Vue.use(Modal);
Vue.component('scroll-link', ScrollLink);
Vue.component('dropdown', dropdown);
Vue.component('visible', visible);
Vue.component('confirm-dialog', confirmDialog);
Vue.component('confirmButton', confirmButton);
Vue.component('tabs', tabs);
Vue.component('tab', tab);

new Vue({
    el: "#app",
    methods: {
        confirm(message) {
            this.$modal.dialog(message)
                .then(confirmed => {
                    if (confirmed) {
                        // Proceed. Submit ajax request, etc.
                        alert('Proceed');
                    } else {
                        // Optionally override the button visibility and labels.
                        this.$modal.dialog('Okay, canceled', {
                            cancelButton: 'Close',
                            confirmButton: false
                        });
                    }
                });
        }
    }

})


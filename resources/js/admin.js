import VueFlatPickr from 'vue-flatpickr-component';
import VueQuillEditor from 'vue-quill-editor';
import BootstrapVue from 'bootstrap-vue';

require('./bootstrap');
require('@fortawesome/fontawesome-free/js/all.js');

window.Vue = require('vue');

Object.defineProperty(Vue.prototype, '$_', { value: _ });

Vue.use(VueFlatPickr);
Vue.use(VueQuillEditor, {});
Vue.use(BootstrapVue);

Vue.component('editor', require('./components/admin/Editor.vue').default);
Vue.component('dropzone', require('./components/admin/Dropzone.vue').default);
Vue.component('search-select', require('./components/admin/SearchSelect.vue').default);

Vue.component('conferences-index', require('./components/admin/conferences/index.js').default);
Vue.component('conferences-edit', require('./components/admin/conferences/edit.js').default);
Vue.component('conferences-create', require('./components/admin/conferences/create.js').default);

Vue.component('sections-index', require('./components/admin/sections/index.js').default);
Vue.component('sections-edit', require('./components/admin/sections/edit.js').default);
Vue.component('sections-create', require('./components/admin/sections/create.js').default);

Vue.mixin({
    methods: {
        confirm() {
            return new Promise((resolve, reject) => {
                const noty = new Noty({
                    type: 'warning',
                    text: 'Подтверждаете действие?',
                    buttons: [
                        Noty.button('Да', 'btn btn-success', () => {
                            noty.close();
                            resolve();
                        }),
                        Noty.button('Нет', 'btn btn-danger', () => {
                            noty.close();
                            // reject();
                        }),
                    ],
                });
                noty.show();
            });
        },
    },
});

const app = new Vue({
    el: '#app',
    data() {
        return {
            flatpickrConf: {
                mode: 'range',
                dateFormat: 'd.m.Y',
            },
        };
    },
});

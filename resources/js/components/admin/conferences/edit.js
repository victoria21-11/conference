import CRUDMixins from '../crud/edit.js';

export default {
    data() {
        return {
            url: '/admin/conferences'
        }
    },
    mixins: [CRUDMixins],
}

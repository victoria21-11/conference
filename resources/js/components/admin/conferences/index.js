import CRUDMixins from '../crud/index.js';

export default {
    data() {
        return {
            url: '/admin/conferences'
        }
    },
    mixins: [CRUDMixins],
}
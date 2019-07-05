require('./bootstrap');
import Vuetify from 'vuetify'

window.Vue = require('vue');

Vue.use(Vuetify)
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    data() {
        return {
            carruseles: [{
                    src: 'https://i.ibb.co/xGZG7Ns/img1.jpg'
                },
                {
                    src: 'https://i.ibb.co/FsZMG9H/img2.jpg'
                },
                {
                    src: 'https://i.ibb.co/m97fDZf/img3.jpg'
                }
            ]
        }
    }
});

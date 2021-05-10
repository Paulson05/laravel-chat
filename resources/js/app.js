

require('./bootstrap');

window.Vue = require('vue').default;

import Toasted from 'vue-toasted';

Vue.use(Toasted)
import VueChatScroll from 'vue-chat-scroll';
Vue.use(VueChatScroll);




Vue.component('message', require('./components/MessageComponent.vue').default);



const app = new Vue({
    el: '#app',
    data:{
        message: '',
        chat:{
            message: [],
            user: [],
            color: [],
            time: []
        },
        // typing: '',
        // numberOfUser:0
    },

    methods:{
        send() {
            if (this.message.length != 0) {
                this.chat.message.push(this.message);
                this.chat.color.push('secondary');
                this.chat.user.push('you');
                // this.chat.time.push(this.getTime());


                axios.post('/send', {
                    message: this.message,
                    chat:this.chat
                })
                    .then(response => {
                        console.log(response);
                        this.message = ''
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
        }
    },


    mounted() {
        Echo.private(`chat`)
            .listen('ChatEvent', (e) => {
                this.chat.message.push(e.message);
                // this.chat.color.push('secondary');
                this.chat.user.push(e.user);
                // this.chat.time.push(this.getTime());
                // console.log(e);
            });




    }
});

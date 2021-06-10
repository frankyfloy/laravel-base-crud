require('./bootstrap');

let app = new Vue({
    el: '#details',

    data:{
        show: false
    },

    methods:{
        hiddenModal(){
            this.show = !this.show;
            console.log(this.show);
        },
    }
});

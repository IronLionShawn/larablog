
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */


Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('message-element',require('./components/message-element'));

Vue.component('ins-modal', require('./components/INS-Modal'));

Vue.component('tab', require('./components/tab.vue'));

Vue.component('tabs', require('./components/tabs.vue'));

Vue.component('coupon', require('./components/coupon.vue'));

Vue.component('modal-card', require('./components/modal-card.vue'));

Vue.component('progress-view', require('./components/progress-view.vue'));

// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*const app = new Vue({
    el: '#app'
});*/

window.EventHandler = new Vue();

/*new Vue({
    el:'#root',
    data: {
        showModal: false,
        couponApplied: false,
        skills: [],
        name: '',
        description: '',

    },
    methods: {
        onCouponApplied(couponInput) {

            //console.log(couponInput);

            console.warn('onCoupon applied');

            this.couponApplied = true;

            if (couponInput.length > 0) {
                this.couponApplied = true;
            }
            else {
                this.couponApplied = false;
            }
        },
        logger(data) {
            console.log(data);
        },
        onSubmit() {
            alert('submitting');
        },
    },
    created() {
        //EventHandler.$on('applied', (data) => { console.log(data);this.onCouponApplied(data);});
    },
    mounted() {

        var self = this;
        axios.get('/skills/').then((response) => {
          self.skills = response.data;
          self.$options.methods.logger(response);
          console.log(self);

        })
        .catch((error) => {
            console.log(error);
        });
    }
});*/

class Errors {
    constructor(){
        this._errors = {};

        this.getField = (field) => {
            if (this._errors[field]) {
                return this._errors[field][0];
            }
        };

        this.any = () => {
          return Object.keys(this._errors).length > 0;
        };

        this.record = (errors) => {
            this._errors = errors;
        };

        this.clear = function(field) {
          delete this._errors[field];
        };
    }
}


new Vue({
    el: '#root',
    data: {
        name: '',
        description: '',
        hasErrors: false,
        errorsObject: new Errors(),
        errors: new Errors()
    },
    methods: {
        onSubmit() {
            let props = {'name': this.name, 'description': this.description };
           axios.post('/projects',props)
               .then( response => {
                    alert(response.data);
               })
               .catch(error => {
                    this.hasErrors = true;
                    this.errors.record(error.response.data.errors);
                    console.log(error.response);

                    /*for (let error in this.errorsObject) {
                        if(this.errorsObject.hasOwnProperty(error)){
                           this.errors.push(this.errorsObject.getField(error));
                        }
                    }*/

               })
           ;
        }
    },
    computed: {

    }
});
//Vue.component('test',require('./components/TestComponent'));





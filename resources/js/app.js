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
 * Eg. ./components/products.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

var Product = require('./components/products.vue');
var formCredit = require('./components/formCredit.vue');
var formBoleto = require('./components/formBoleto.vue');
var payBoleto = require('./components/payBoleto.vue');
var success = require('./components/success.vue');
var error = require('./components/error.vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data() {
        return {
            selected: '1'
        }
    },
    components:
        {
            'products': Product.default,
            'form-credit': formCredit.default,
            'form-boleto': formBoleto.default,
            'pay-boleto': payBoleto.default,
            'success': success.default,
            'error': error.default,
        }
});

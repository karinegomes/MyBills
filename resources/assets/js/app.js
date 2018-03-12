
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

var Vue = require('vue');

import VueSweetalert2 from 'vue-sweetalert2';

window.Vue = Vue;

Vue.use(require('vue-resource'));
Vue.use(VueSweetalert2);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('list-categories', require('./components/categories/List.vue'));
Vue.component('list-family-members', require('./components/family_members/List.vue'));

const app = new Vue({
    el: '#my-bills-app'
});

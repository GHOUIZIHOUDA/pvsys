/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');




import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
//  window.Vue = require('vue');
 
 /**
  * Next, we will create a fresh Vue application instance and attach it to
  * the page. Then, you may begin adding components to this application
  * or customize the JavaScript scaffolding to fit your unique needs.
  */
//   Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('navbar', require('./components/Navbar.vue'));

//  Vue.component('articles', require('./components/Articles.vue'));
 
//  const app = new Vue({
//    el: '#app'
//  });
 // Require Vue



window.Vue = require('vue').default;

// Register Vue Components
Vue.component('dashclient', require('./pages/dashclient.vue').default);

// Initialize Vue
const app = new Vue({
    el: '#app',
    router: router,
});

const router = new VueRouter({
  mode: 'history',
  routes: routes
})






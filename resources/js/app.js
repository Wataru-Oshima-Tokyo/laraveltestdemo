/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueRouter from 'vue-router';
import HeaderComponent from "./components/HeaderComponent";
import TaskListComponent from "./components/TaskListComponent";
import TaskShowComponent from "./components/TaskShowComponent";
import TaskCreateComponent from "./components/TaskCreateComponent";
import TaskEditComponent from "./components/TaskEditComponent";
import Navigation from "./components/navigation";
import Portfolio from "./components/portfolio";
import ContactForm from "./components/contactForm";
import Makeupvideos from "./components/makeupvideos";
import Home from "./components/home";
import BootstrapVue from 'bootstrap-vue';


window.Vue = require('vue').default
window.axios = require('axios');
Vue.use(require('bootstrap-vue'));

// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(VueRouter);
const router = new VueRouter({
  mode: 'history',
    routes: [
      // {
        //     path: '/tasks',
        //     name: 'task.list',
        //     component: TaskListComponent
        // },
        // {
        //     path: '/tasks/create',
        //     name: 'task.create',
        //     component: TaskCreateComponent
        // },
        // {
        //     path: '/tasks/:taskId',
        //     name: 'task.show',
        //     component: TaskShowComponent,
        //     props: true,
        // },
        // {
        //     path: '/tasks/:taskId/edit',
        //     name: 'task.edit',
        //     component: TaskEditComponent,
        //     props: true
        // },
        {
          path: '/',
          name: 'Home',
          component: Home
        },
        {
          path:'/portfolio',
          name: 'portfolio',
          component: Portfolio
        },
        {
          path: '/makeupvideos',
          name: 'makeupvideos',
          component: Makeupvideos
        }
    ]
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('header-component', HeaderComponent);
Vue.component('navigation-component', Navigation);
Vue.component('portfolio-component', Portfolio);
Vue.component('home-component', Home);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});

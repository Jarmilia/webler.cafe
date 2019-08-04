
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// import VueRouter from 'vue-router'
// Vue.use(VueRouter);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
//Praktisch bei sehr vielen Komponenten:
// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('back-to-top', require('./components/BackToTop.vue').default);

 
// const app = new Vue({
//         el: '#app',
//         created() {
//             axios.get('/api/tasks').then((tasks) => {
//                 this.todos = tasks.data.data;
//             }).catch(() => {
//                 alert('Something went wrong!');
//             });
//         },
//         data() {
//             return {
//                 todos: [],
//                 newTodo: '',
//                 errors: {}
//             }
//         },
//         methods: {
//             removeTodo(id) {
//                 axios.delete('/api/tasks/' + id).then(() => {
//                     this.todos = this.todos.filter((todo) => {
//                         return todo.id !== id;
//                     });
//                 }).catch(() => {
//                     alert('Something went wrong');
//                 });
//             },
//             addTodo() {
//                 this.errors = {}
    
//                 axios.post('/api/tasks', {
//                     task : this.newTodo,
//                 }).then((task) => {
//                     this.todos.push(task.data);
//                     this.newTodo = '';
//                 }).catch((error) => {
//                     if (error.response.status === 422) {
//                         this.errors = error.response.data.errors;
//                     } else {
//                         alert('Something went wrong');
//                     }
//                 });
//             }
//         }
//     });
    
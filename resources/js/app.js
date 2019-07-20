
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
Vue.component('task-list', require('./components/TaskList.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    created() {
        axios.get('/api/tasks').then((tasks)=>{
            this.todos = tasks.data.data;
        });
    },
    data() {
        return{
            firstname: 'Hugo',
            lastname: 'Müller',
            price: 10,
            tax: 0.19,
            todos :[
                {
                    "id" : "1",
                    "task" : "Küche putzen",
                    "imp" : "true",

                },
                {
                    "id" : "2",
                    "task" : "Wohnzimmer aufräumen",
                    "imp" : "false",

                },
                {
                    "id" : "3",
                    "task" : "Kinderzimmer aufräumen",
                    "imp" : "false",
                }
            ]
        }
    },
    methods: {
        removeTodo(id){
            axios.delete('/api/tasks' + id).then( ()=>{
                this.todos = this.todos.filter((todo)=> {
                    return todo.id !== id;
                }).catch(()=>{
                    alert('Something went wrong!');
                });
            });
        },
        addTodo(){
            this.errors = {}; //am Anfang die ganzen Errors zurrücksetzen, damit die alten errors nicht stehen bleiben.
            axios.post('/api/tasks', {
                task: this.newTodo,
            }).then(task => {
                this.todos.push({
                    id: null,
                    task:this.newTodo,
                    imp:false,
                });
                this.newTodo = '';
            }).catch((error)=> {
                if(error.response-status === 422){
                    this.error = error.response.data.errors;
                }else{
                    alert('Something went wrong!');
                }
            });
        }
    },
    computed: {
        // grossPrice(){
        //     return this.price + (this.price*this.tax),
        // },
        fullName(){
            return this.firstname + ' ' +this.lastname;
        }
    },
    filters: {
        capitalized(val){
            return val.tuUpperCase();
        }
    }
});

let tl = new TimelineLite,
    mySplitText = new SplitText("*.split-text", {
        type: "words, lines, chars"})
        chars = mySplitText.chars

tl.staggerFrom(chars, 2, {opaity:0, y:0, ease: Power4.easeOut}, 0.09)
window.onload = function() {
		tl.restart();
}


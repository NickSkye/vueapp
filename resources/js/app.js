
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('card-component', require('./components/CardComponent.vue'));
Vue.component('button-counter', require('./components/ButtonCounter.vue'));

// Vue.component('button-counter', {
//     data: function () {
//         return {
//             count: 0
//         }
//     },
//     template: '<button v-on:click="count++">You clicked me {{ count }} times.</button>'
// })
const app = new Vue({
    el: '#app'
});

var app2 = new Vue({
    el: '#root',
    data: {
        message: 'Hello World'
    },
    methods: {
        reverseMessage: function() {
            this.message = this.message.split('').reverse().join('')
        }
    }
});


var example1 = new Vue({
    el: '#example-1',
    data: {
        counter: 0
    }
})

new Vue({
    el: '#components-demo'
})

var tabs = [
    {
        name: 'Home',
        component: {
            template: '<div>Home component</div>'
        }
    },
    {
        name: 'Posts',
        component: {
            template: '<div>Posts component</div>'
        }
    },
    {
        name: 'Archive',
        component: {
            template: '<div>Archive component</div>',
        }
    }
]

new Vue({
    el: '#dynamic-component-demo',
    data: {
        tabs: tabs,
        currentTab: tabs[0]
    }
})

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = require('vue')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
const app = new Vue({
  el: '#app',
  data: {
    todos: []
  },
  methods: {
    fetchTodos: function () {
      axios.get('/api/get').then((res) => {
        this.todos = res.data
      })
    },
    addTodo: function () {
      axios.post('/api/add', {
        title: this.new_todo
      }).then((res) => {
        this.todos = res.data
        this.new_todo = ''
      })
    },
    deleteTodo: function (taskid) {
      axios.delete('/api/del', {
        id: taskid
      }).then((res) => {
        this.todos = res.data
      })
    }
  },
  created () {
    this.fetchTodos()
  }
})

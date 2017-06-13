
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data: {
    	message: 'Hello, World!',
    	tasks: [
			{ description: "Go to the store", completed: true },
			{ description: "Finish screencast", completed: false },
			{ description: "Make donation", completed: false },
			{ description: "Clear inbox", completed: false },
			{ description: "Make dinner", completed: false },
			{ description: "Clean room", completed: true }
		]
    },
    computed: {
    	completedTasks() {
    		return this.tasks.filter(task => task.completed);
    	},
    	uncompletedTasks() {
    		return this.tasks.filter(task => !task.completed);
    	}
    }
});

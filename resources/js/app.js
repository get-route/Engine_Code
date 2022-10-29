/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({
});

import AdminComponent from "./components/admin/AdminComponent.vue";
import EnginesComponent from "./components/admin/engines/EnginesComponent.vue";
import AutomobilesComponent from "./components/admin/auto/AutomobilesComponent.vue";
import LaravelVuePagination from 'laravel-vue-pagination';
import CommentsModelController from "./components/frontend/comments/CommentsModelController.vue";
import CommentsEngineController from "./components/frontend/comments/CommentsEngineController.vue";
import ReplyButtonComponent from "./components/frontend/comments/ReplyButtonComponent.vue";
import CommentComponent from "./components/admin/comments/CommentComponent.vue";
import SearchEngineComponent from "./components/frontend/search/SearchEngineComponent.vue";
import SearchModelComponent from "./components/frontend/search/SearchModelComponent.vue";
import Search from "./components/frontend/search/Search.vue";



app.component('admin-component',AdminComponent);
app.component('eng-component', EnginesComponent);
app.component('auto-component', AutomobilesComponent);
app.component('pagination', LaravelVuePagination);
app.component('comments-model',CommentsModelController);
app.component('comments-engine',CommentsEngineController);
app.component('reply-button',ReplyButtonComponent);
app.component('comments-component',CommentComponent)
app.component('search-engine',SearchEngineComponent)
app.component('search-model',SearchModelComponent)
app.component('searcher',Search)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.globEager('./**/*.vue')).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');

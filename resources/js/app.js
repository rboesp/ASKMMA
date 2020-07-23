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
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('accordion-component', require('./components/AccordionComponent.vue').default);
Vue.component('arrow-icon', require('./components/ArrowIcon.vue').default);
Vue.component('the-copywrite', require('./components/TheCopywrite.vue').default);

Vue.component('the-career', require('./components/TheCareer.vue').default);
Vue.component('career-list', require('./components/CareerList.vue').default);
Vue.component('careers-manage', require('./admin/careers/Index.vue').default);

Vue.component('feedback-list', require('./admin/feedbacks/Index.vue').default);

Vue.component('contacts-messages-list', require('./admin/messages/Index.vue').default);
Vue.component('users-list', require('./admin/users/Index.vue').default);
Vue.component('users-create', require('./admin/users/Create.vue').default);
Vue.component('user-info', require('./admin/users/components/UserInfo.vue').default);
Vue.component('app-button', require('./components/common/AppButton.vue').default);

Vue.component('user-dropdown', require('./components/UserDropdown.vue').default);
Vue.component('sunfire-authorize-form', require('./components/SunfireAuthorizeForm.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

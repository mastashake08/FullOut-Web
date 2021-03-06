
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
const resource = require('vue-resource');
Vue.use(resource);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('message', require('./components/Message.vue'));
Vue.component('instructor',require('./components/Instructor.vue'));

Vue.component('cheerleaders',require('./components/Cheerleaders.vue'));
Vue.component('cheerleader',require('./components/Cheerleader.vue'));
Vue.component('coach',require('./components/Coach.vue'));
Vue.component('teams',require('./components/Teams.vue'));
Vue.component('private-instructors',require('./components/PrivateInstructors.vue'));
Vue.component('private-instructor',require('./components/PrivateInstructor.vue'));
Vue.component('favorites',require('./components/Favorites.vue'));
Vue.component('favorite-teams',require('./components/FavoriteTeams.vue'));
Vue.component('videos',require('./components/Videos.vue'));
Vue.component('sos-list',require('./components/SosList.vue'));
Vue.component('school-table',require('./components/SchoolDataTable.vue'));
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

Vue.prototype.$eventHub = new Vue(); // Global event bus

const app = new Vue({
    el: '#fullout'
});

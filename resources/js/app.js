require('./bootstrap');

window.Vue = require('vue');

Vue.component('indexcontacto-component', require('./components/IndexContactoComponent.vue').default);
Vue.component('indexcotizacion-component', require('./components/IndexCotizacionComponent.vue').default);
Vue.component('createcotizacion-component', require('./components/CreateCotizacionComponent.vue').default);
Vue.component('editcotizacion-component', require('./components/EditCotizacionComponent.vue').default);

Vue.component('ensayos-component', require('./components/EnsayosComponent.vue').default);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
	el: '#app',
});
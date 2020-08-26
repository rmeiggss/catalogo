require('./bootstrap');

window.Vue = require('vue');
Vue.component('usuario-component', require('./components/UsuarioComponent.vue').default);
Vue.component('indexcotizacion-component', require('./components/IndexCotizacionComponent.vue').default);
Vue.component('createcotizacion-component', require('./components/CreateCotizacionComponent.vue').default);
Vue.component('editcotizacion-component', require('./components/EditCotizacionComponent.vue').default);

const  app = new Vue({
  el: '#app',data:{}
})

new Vue({
	el: '#crud_equipos',
	data:{

		array: []
	}
	methods: {
		getEquipos:
	}
});
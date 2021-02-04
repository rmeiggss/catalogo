require('./bootstrap');

window.Vue = require('vue');
window.Swal = require('sweetalert2');

Vue.component('indexcontacto-component', require('./components/IndexContactoComponent.vue').default);
Vue.component('indexcotizacion-component', require('./components/IndexCotizacionComponent.vue').default);
Vue.component('indexcotizacioncalibracion-component', require('./components/IndexCotizacionCalibracionComponent.vue').default);
Vue.component('indexcotizacioncapacitacion-component', require('./components/IndexCotizacionCapacitacionComponent.vue').default);

Vue.component('createcotizacion-component', require('./components/CreateCotizacionComponent.vue').default);
Vue.component('createcotizacioncalibracion-component', require('./components/CreateCotizacionCalibracionComponent.vue').default);
Vue.component('createcotizacioncapacitacion-component', require('./components/CreateCotizacionCapacitacionComponent.vue').default);
Vue.component('createcontacto-component', require('./components/CreateContactoComponent.vue').default);

Vue.component('editcotizacion-component', require('./components/EditCotizacionComponent.vue').default);
Vue.component('editcotizacioncalibracion-component', require('./components/EditCotizacionCalibracionComponent.vue').default);
Vue.component('editcotizacioncapacitacion-component', require('./components/EditCotizacionCapacitacionComponent.vue').default);
Vue.component('editcontacto-component', require('./components/EditContactoComponent.vue').default);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('ensayos', require('./components/EnsayosComponent.vue').default);
Vue.component('calibraciones', require('./components/CalibracionesComponent.vue').default);
Vue.component('capacitaciones', require('./components/CapacitacionesComponent.vue').default);
Vue.component('vista-preliminar', require('./components/VistaPreliminarComponent.vue').default);
Vue.component('window-portal', require('./components/WindowPortalComponent.vue').default);
// Vue.component('file-upload-component', require('./components/FileUploadComponent.vue').default);

/* Mantenimientos */
//Solicitante
Vue.component('createsolicitante-component', require('./components/CreateSolicitanteComponent.vue').default);
Vue.component('editsolicitante-component', require('./components/EditSolicitanteComponent.vue').default);
Vue.component('indexsolicitante-component', require('./components/IndexSolicitanteComponent.vue').default);


const app = new Vue({
	el: '#app',
});

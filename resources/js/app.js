require('./bootstrap');

window.Vue = require('vue');

Vue.component('usuario-component', require('./components/UsuarioComponent.vue').default);
Vue.component('cotizacion-component', require('./components/CotizacionComponent.vue').default);

const  app = new Vue({
  el: '#app',data:{}
})
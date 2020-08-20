require('./bootstrap');

window.Vue = require('vue');

Vue.component('usuario-component', require('./components/UsuarioComponent.vue').default);

const  app = new Vue({
  el: '#app',data:{
      rows: [],
      saveData:null
    },
    methods:{
      addRow:function(){
        var numRows = this.rows.length;
        this.rows.push({});
      }
    }  
})
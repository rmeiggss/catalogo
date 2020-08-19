require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

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
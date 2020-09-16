<template>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <!--div class="card-header">
          <h3 class="card-title">DataTable with minimal features & hover style</h3>
        </div-->
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
              <th scope="col">Numero</th>
              <th scope="col">Solicitante</th>
              <th scope="col">Contacto</th>
              <th scope="col">Fecha</th>
              <th scope="col">Total S/.</th>
              <th scope="col" colspan="2">Acciones</th>
            </tr>
            </thead>
            <tbody>
              <tr v-for="(cotizacion,indice) of cotizaciones" class="text-center">
                <td>{{cotizacion.COTIC_Numero}}</td>
                <td>{{cotizacion.SOLIP_Codigo}}</td>
                <td>{{cotizacion.nombre_contacto}}</td>
                <td>{{cotizacion.COTIC_Fecha}}</td>
                <td>{{cotizacion.COTIC_Total}}</td>
                <td><button class="btn btn-info" @click="btnEditar(cotizacion.COTIP_Codigo)">Editar</button></td>
                <td><button class="btn btn-danger" @click="btnBorrar(cotizacion.COTIP_Codigo)">Eliminar</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        data(){
            return {
                cotizaciones: [],
                saveData:null
            }
        },
        created(){
            this.listar();
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            listar(){
                var url = '/cotizacion/list';
                axios.get(url).then(response=>{
                    this.cotizaciones = response.data;
                    console.log(this.cotizaciones);
                });
            },
            btnBorrar(id){
                var url = '/cotizacion/'+id;
                axios.delete(url).then(response=>{
                    this.listar();
                });
            },
            btnEditar(id){
                location.href = '/cotizacion/'+id+'/edit';
            },
            btnNuevo(){
                location.href = '/cotizacion/create';
            }
        }
    }
</script>
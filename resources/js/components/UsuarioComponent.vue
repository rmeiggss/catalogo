<template>
    <div class="card-body">
      <h3 class="card-title mb-2 pr-4">
        <a class="btn btn-info" href="#" @click="btnNuevo()">Agregar Contacto</a>
      </h3>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Rol</th>
          <th scope="col" colspan="2" class="text-center">Acciones</th>
        </tr>
        </thead>
        <tbody>
          <tr v-for="(user,indice) of usuarios">
            <th scope="row">{{indice+1}}</th>
            <td>{{user.name}}</td>
            <td>{{user.email}}</td>
            <td>{{user.ROL_Codigo}}</td>
            <td>
                <button class="btn btn-info" @click="btnEditar(user.id)">Editar</button>
            </td>
            <td>
              <button class="btn btn-danger" @click="btnBorrar(user.id)">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                usuarios: [],
                saveData:null
            }
        },
        created(){
            this.listar();
        },
        methods: {
            listar(){
                var url = '/usuario/list';
                axios.get(url).then(response=>{
                    this.usuarios = response.data;
                    console.log(this.usuarios);
                });
            },
            btnBorrar(id){
                var url = '/usuario/'+id;
                axios.delete(url).then(response=>{
                    this.listar();
                });
            },
            btnEditar(id){
                location.href = '/usuario/'+id+'/edit';
            },
            btnNuevo(){
                location.href = '/usuario/create';
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>


<template>
    <div class="row">
      <label class="col-sm-2 col-form-label col-form-label-sm">Agregar</label>
      <a href="#" @click="addRow()"><i class="fas fa-plus form-control-sm" id="agregar"></i></a>
      <div class="col-12 table-responsive">
       <table class="table table-striped">
          <thead>
           <tr class="text-center">
            <th style="width:5%;">No</th>
            <th style="width:30%;">Nombre</th>
            <th style="width:30%;">Descripcion</th>
            <th style="width:10%;">Fabricante</th>
            <th style="width:5%;">Ficha</th>
            <th style="width:5%;">Pruebas</th>
            <th style="width:5%;">Cantidad</th>
            <th style="width:5%;">P.Unitario</th>
            <th style="width:5%;">Subtotal</th>
          </tr>
          </thead>
            <tbody>
                <tr class="text-center" v-for="(row, index) in cotizaciones">
                  <td><label style="border: 1px solid red;color: blue;"><a href="#" @click="deleteRow(index)">x</a></label></td>
                  <td><input type="text" class="form-control-sm w-100" name="nombre[]"></td>
                  <td><input type="text" class="form-control-sm w-100" name="descripcion[]"></td>
                  <td><input type="text" class="form-control-sm w-100" name="fabricante[]"></td>
                  <td class="pb-0 mb-0"><i class="far fa-file-pdf" style="color:red;font-size: 23px;"></i></td>
                  <td><button type="button" class="btn btn-outline-success btn-lg btn-sm" data-toggle="modal" data-target="#exampleModal">Lista</button></td>
                  <td><input type="text" class="form-control-sm w-100" name="cantidad[]"></td>
                  <td><input type="text" class="form-control-sm w-100" name="unitario[]"></td>
                  <td><input type="text" class="form-control-sm w-100" name="subtotaldet[]"></td>
                </tr>
            </tbody>
        </table>
      </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabel">Pruebas del Equipo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                Descripcion de la Prueba:
                                <br>
                                <textarea style="resize: none" class="form-control" name="" rows="3" cols="5">Escribir algo...</textarea>
                                <label for="ejemplo_archivo_1">Adjuntar un archivo de la Norma Tecnica</label>
                                <input type="file" id="ejemplo_archivo_1">
                            </div>
                            <div class="col-md-6">
                                Norma Asociada:
                                <br>
                                <input class="form-control" type="text" name="" id="primero" />
                                Descripcion de la Norma:
                                <br>
                                <textarea style="resize: none" class="form-control" name="" rows="2" cols="5">Escribir algo...</textarea>
                                <input class="btn btn-default btn-sm" type="submit" name="" value="Guardar" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                           <tr>
                             <th class="text-center">Identificador</th>
                             <th class="text-center">Descripcion de la Prueba</th>
                             <th class="text-center">Norma Asociada</th>
                             <th class="text-center">Estado</th>
                             <th class="text-center">Acciones</th>
                           </tr>
                           <tr>
                             <td class="text-center">1</td>
                             <td class="text-center">Prueba Dielectrica</td>
                             <td class="text-center">Norma IEC-123456</td>
                             <td class="text-center">Completa</td>
                             <td class="text-center">
                                 <a class="btn btn-default btn-sm" href="">Editar</a>
                                 <a class="btn btn-default btn-sm" href="">Eliminar</a>
                             </td>
                           </tr>
                           <tr>
                             <td class="text-center">2</td>
                             <td class="text-center">Prueba Dielectrica</td>
                             <td class="text-center">Norma IEC-123456</td>
                             <td class="text-center">Incompleta</td>
                             <td class="text-center">
                                 <a class="btn btn-default btn-sm" href="">Editar</a>
                                 <a class="btn btn-default btn-sm" href="">Eliminar</a>
                             </td>
                           </tr>
                         </table>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
        </div>
        <!--/Modal-->
    </div>
</template>

<script>
    export default {
        data(){
            return {
                cotizaciones : [],
                saveData:null
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            listar(){
                var url = '/cotizaciondetalle/list';
                axios.get(url).then(response=>{
                    this.cotizaciones = response.data;
                    console.log(this.cotizaciones);
                });
            },
            addRow(){
              this.cotizaciones.push({});
            },
            deleteRow(index){
              this.cotizaciones.splice(index, 1);
            }
        }
    }
</script>
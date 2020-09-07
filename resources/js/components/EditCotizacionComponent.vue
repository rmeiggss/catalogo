<template>

  <!--Form content-->
  <div class="invoice p-3 mb-3">
      <form ref="form">

        <!-- Cabecera fila 1 -->
        <input type="hidden" name="_method" value="PATCH">
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
              <div class="row form-group">
                <label class="col-sm-3 col-form-label col-form-label-sm">Solicitante</label>
                <select v-model="cotizacion.SOLIP_Codigo" class="col-sm-6 form-control-sm">
                  <option v-for="solicitante in solicitantes" v-bind:value="solicitante.id" v-bind:key="solicitante.id">{{ solicitante.SOLIC_Nombre }}</option>
                </select>
              </div>
          </div>
          <div class="col-sm-4 invoice-col">
            <div class="row form-group">
                <label class="col-sm-3 col-form-label col-form-label-sm">Fecha</label>
                <input type="text" class="col-sm-4 form-control-sm" v-model="cotizacion.COTIC_Fecha" autocomplete="off">
            </div>
          </div>

          <div class="col-sm-4 invoice-col">
              <div class="row form-group">
                <label class="col-sm-3 col-form-label col-form-label-sm">Numero</label>
                <input type="text" v-model="cotizacion.COTIC_Numero" class="col-sm-3 form-control-sm" maxlength="11" autocomplete="off">
              </div>
          </div>
        </div>
        <!-- /.Cabecera fila 1 -->

        <!-- Cabecera fila 2 -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
              <div class="row form-group">
                <label class="col-sm-3 col-form-label col-form-label-sm">Contacto</label>
                <input type="text" name="contacto" id="contacto" autocomplete="off" class="col-sm-6 form-control-sm">
              </div>
          </div>
          <div class="col-sm-4 invoice-col">
              <div class="row form-group">
                <label class="col-sm-3 col-form-label col-form-label-sm">Usuario</label>
                <select v-model="cotizacion.USUA_Codigo" class="col-sm-6 form-control-sm">
                  <option v-for="usuario in usuarios" v-bind:value="usuario.id" v-bind:key="usuario.id">{{ usuario.name }}</option>
                </select>
              </div>
          </div>
          <div class="col-sm-4 invoice-col">
              <div class="row form-group"></div>
          </div>
        </div>
        <!-- /.Cabecera fila 2 -->

        <!--Detalle Cotizacion-->
        <div class="row invoice-info">
          <label class="col-sm-2 col-form-label col-form-label-sm">Agregar</label>
          <a href="#" @click="addRow()">
            <i class="fas fa-plus form-control-sm" id="agregar"></i>
          </a>
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
                <tr class="text-center" v-for="(cotdetalle,index) in cotizacionesdetalle" :key="cotdetalle.CODEP_Codigo">
                  <td>
                    <label style="border: 1px solid red;color: blue;"><a href="#" @click="deleteRow(index)">x</a></label>
                    <input type="hidden" name="codigodet[]" v-model="cotdetalle.CODEP_Codigo">
                  </td>
                  <td>
                    <input type="text" class="form-control-sm w-100" name="nombre[]" v-model="cotdetalle.CODEC_NombreEquipo" autocomplete="off">
                  </td>
                  <td><input type="text" class="form-control-sm w-100" name="descripcion[]" v-model="cotdetalle.CODEC_Descripcion" autocomplete="off"></td>
                  <td><input type="text" class="form-control-sm w-100" name="fabricante[]" v-model="cotdetalle.CODEC_Fabricante" autocomplete="off"></td>
                  <td class="pb-0 mb-0"><i class="far fa-file-pdf" style="color:red;font-size: 23px;"></i></td>
                  <td><button type="button" class="btn btn-outline-success btn-lg btn-sm" data-toggle="modal" data-target="#exampleModal">Lista</button></td>
                  <td><input type="text" class="form-control-sm w-100" name="cantidad[]" v-model="cotdetalle.CODEC_Cantidad" autocomplete="off"></td>
                  <td><input type="text" class="form-control-sm w-100" name="unitario[]" v-model="cotdetalle.CODEC_PrecioUnitario" autocomplete="off"></td>
                  <td><input type="text" class="form-control-sm w-100" name="subtotaldet[]" :value="cotdetalle.CODEC_Cantidad*cotdetalle.CODEC_PrecioUnitario" readonly="readonly" autocomplete="off"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
<<<<<<< HEAD
        <!--/Detalle Cotizacion-->
=======
        <!--/Detalle Cotizacion--> 
>>>>>>> bf8c839e468a5cde8d43d361f150d6093fe78f3c

        <!--Subtotales-->
        <div class="row">
          <div class="col-9">&nbsp;</div>
          <div class="col-3">
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <th style="width:50%">Subtotal S/.:</th>
                  <td>
                    <input type="text" v-model="cotizacion.COTIC_SubTotal" class="form-control-sm w-50">
                    </td>
                </tr>
                <tr>
                  <th>I.G.V. S/. (18%)</th>
                  <td>
                    <input type="text" v-model="cotizacion.COTIC_Igv" class="form-control-sm w-50"></td>
                </tr>
                <tr>
                  <th>Total S/.:</th>
                  <td><input type="text" v-model="cotizacion.COTIC_Total" class="form-control-sm w-50"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <!--/Subtotales-->

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

        <!--Botones-->
        <div class="row text-center">
            <div class="col text-center">
                <a class="btn btn-danger" href="/cotizacion">Cancelar</a>
                <a class="btn btn-info" v-on:click="submit">Grabar</a>
            </div>
        </div>
        <!--/Botones-->

      </form>
  </div>
  <!--/Form content-->

</template>

<script>
    export default {
        data(){
            return {
                cotizacion:[],
                cotizacionesdetalle : [],
                solicitantes:[],
                saveData:null
            }
        },
        props:{
            codigo:String
        },
        created(){
            this.getCotizacionDetalle(this.codigo);
            this.getCotizacion(this.codigo);
            this.listarSolicitantes();
        },
        mounted() {
            console.log('Component mounted.')
        },
        computed:{
          setSubTotal:function(){
            var suma = 0;
            return this.cotizacionesdetalle.reduce((suma,cotdetalle)=>suma+cotdetalle.CODEC_Cantidad,0);
          }
        },
        methods:{
            getCotizacionDetalle(id){
                var url = '/cotizaciondetalle/'+id+'/list';
                axios.get(url).then(response=>{
                    this.cotizacionesdetalle = response.data;
                });
            },
            getCotizacion(id){
                var url = '/cotizacion/'+id+'/get';
                axios.get(url).then(response=>{
                    this.cotizacion = response.data;
<<<<<<< HEAD
                    console.log(this.cotizacion);
=======
                    console.log(this.cotizacion);                    
>>>>>>> bf8c839e468a5cde8d43d361f150d6093fe78f3c

                });
            },
            listarSolicitantes(){
                var url = '/solicitante/list';
                axios.get(url).then(response=>{
                    this.solicitantes = response.data;
                });
            },
            addRow(){



              //let cotdet = {CODEP_Codigo:0};

              this.cotizacionesdetalle.push({});
            },
            deleteRow(index){
              this.cotizacionesdetalle.splice(index, 1);
            },
            submit(){
              this.$refs.form.submit();
            }
        }
    }
</script>
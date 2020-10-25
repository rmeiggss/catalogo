<template>

<div class="form control">
     <button type="button" class="btn btn-success btn-lg ml-3" data-toggle="modal"
        data-target="#mimodalequipo" id="boton_modal" style="border-radius:5px;">
        Nuevo Equipo
    </button>

    <br>
    <br>
    <div>
        <table class="table table-bordered">
        	<thead v-show="arrayEnsayos.length">
                <tr>
                    <th scope="col" class="text-center">Identificador</th>
                    <th scope="col" class="text-center">Nombre del Equipo</th>
                    <th scope="col" class="text-center">Descripcion del Equipo</th>
                    <th scope="col" class="text-center">Cantidad</th>
                    <th scope="col" class="text-center">Fabricante</th>
                    <th scope="col" class="text-center">Descripcion Ficha Tecnica</th>
                    <th scope="col" class="text-center">URL Ficha Tecnica</th>
                    <th scope="col" class="text-center">Nueva Prueba</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="ensayo in arrayEnsayos" :key="k">
                    <td scope="row" class="text-center" v-text="ensayo.id"></td>
                    <td class="text-center" v-text="ensayo.nombre_eq"></td>
                    <td class="text-center" v-text="ensayo.descripcion_eq"></td>
                    <td class="text-center" v-text="ensayo.cantidad_eq"></td>
                    <td class="text-center" v-text="ensayo.fabricante_eq"></td>
                    <td class="text-center" v-text="ensayo.descrip_tec_eq"></td>
                    <td class="text-center" v-text="ensayo.url_tec_eq"></td>
                    <td class="text-center">
                        <button type="button" class="btn btn-info btn-sm px-1" data-toggle="modal" data-target="#mimodalnuevaprueba"
                        id="boton_modal" style="border-radius:5px;">
                            Prueba
                        </button>
                    </td>
                    <th class="text-center">
                        <button class="btn btn-warning btn-sm m-auto" style="border-radius:5px;" data-toggle="modal"
                                data-target="#modaleditarequipo">
                            Editar
                        </button>
                        <button class="btn btn-danger btn-sm m-auto" style="border-radius:5px;" @click="deleteEnsayos(k, ensayo)">
                            Eliminar
                        </button>
                    </th>
                </tr>
            </tbody>
        </table>
	</div>

        <!-- MODAL PARA AGREGAR EQUIPO -->
        <div class="modal fade" id="mimodalequipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                        <h1 style="text-align: center;color:black;font-size:30px;margin-bottom:10px;">
                            <b>Agregar Equipos a la Cotizacion</b>
                        </h1>
                        <hr>
                            <div class="form-horizontal form-control" style="width:400px;height:900px;margin:0 auto">
                                <label>Nombre del Equipo:</label>
                                <br>
                                <input v-model="nombre_eq" type="text" class="form-control">

                                <label>Descripcion del Equipo:</label>
                                <br>
                                <textarea v-model="descripcion_eq" style="resize: none" class="form-control"
                                          rows="5" cols="5"></textarea>

                                <label>Cantidad de Equipos:</label>
                                <input class="form-control" type="text" v-model="cantidad_eq">

                                <label>Fabricante del Equipo:</label>
                                <input class="form-control" type="text" v-model="fabricante_eq">

                                <label>Descripcion Tecnica del Equipo:</label>
                                <textarea style="resize: none" class="form-control" v-model="descrip_tec_eq"
                                          rows="5" cols="5"></textarea>

                                <label>URL de la Ficha Tecnica del Equipo:</label>
                                <textarea style="resize: none" class="form-control" v-model="url_tec_eq"
                                          rows="5" cols="5"></textarea>

                                <div class="form-group">
                                    <label for="archiv_descrip_equipo">Adjuntar un archivo de la descripcion del equipo</label>
                                    <input type="file">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button @click="getEnsayos" class="btn btn-primary btn-lg m-auto" data-dismiss="modal">
                                    Añadir
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL PARA AGREGAR EQUIPO -->

        <!-- MODAL PARA EDITAR EQUIPO -->
        <div class="modal fade" id="modaleditarequipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                        <h1 style="text-align: center;color:black;font-size:30px;margin-bottom:10px;">
                            <b>Editar Equipos de la Cotizacion</b>
                        </h1>
                        <hr>
                            <div class="form-horizontal form-control" style="width:400px;height:900px;margin:0 auto">
                                <label for="nombre_eq">Nombre del Equipo:</label>
                                <br>
                                <input type="text" name="nombre_eq" class="form-control" v-model="fillEnsayos.nombre_eq">

                                <label>Descripcion del Equipo:</label>
                                <br>
                                <textarea v-model="fillEnsayos.descripcion_eq" name="descripcion_eq" style="resize: none"
                                          class="form-control" rows="5" cols="5"></textarea>

                                <label>Cantidad de Equipos:</label>
                                <br>
                                <input class="form-control" type="text" v-model="cantidad_eq" value="">

                                <label>Fabricante del Equipo:</label>
                                <br>
                                <input class="form-control" type="text" v-model="fabricante_eq" value="">

                                <label>Descripcion Tecnica del Equipo:</label>
                                <br>
                                <textarea style="resize: none" class="form-control" v-model="descrip_tec_eq"
                                          rows="5" cols="5"></textarea>

                                <label>URL de la Ficha Tecnica del Equipo:</label>
                                <br>
                                <textarea style="resize: none" class="form-control" v-model="url_tec_eq"
                                          rows="5" cols="5"></textarea>

                                <div class="form-group">
                                    <label>Adjuntar un archivo de la descripcion del equipo</label>
                                    <input type="file">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button @click="editarEnsayos(ensayo)" class="btn btn-primary btn-lg m-auto" data-dismiss="modal">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL PARA EDITAR EQUIPO -->

        <!-- MODAL PARA PRUEBA EQUIPO -->
        <div class="modal fade" id="mimodalnuevaprueba" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-body">

                <!-- formulario -->
                <div class="container">
                <h1 style="text-align: center;color:black;font-size:30px;"><b>Agregar una Prueba al Equipo</b></h1>
                <hr>
                <div class="form-horizontal form-control" style="width:400px;height:650px;margin:0 auto">
                Descripcion de la Prueba a Realizar
                <br>
                <textarea style="resize: none" class="form-control" name="" rows="5" cols="5">Escribir algo...</textarea>
                Norma Asociada a la Prueba:
                <br>
                <input class="form-control" type="text" name="" id="primero" />
                Descripcion de la Norma:
                <br>
                <textarea style="resize: none" class="form-control" name="" rows="5" cols="5">Escribir algo...</textarea>
                <div class="form-group">
                    <label for="ejemplo_archivo_1">Adjuntar un archivo de la descripcion de la Norma Tecnica</label>
                    <input type="file" id="ejemplo_archivo_1">
                </div>
                Estado de la Norma:
                <br>
                <select class="form-control">
                    <option value="volvo">La norma se describio en el formulario</option>
                    <option value="saab">La norma se envio como archivo en el formulario</option>
                    <option value="saab">La norma se describio y se envio como archivo en el formulario</option>
                    <option value="saab">La norma no se envio en el formulario</option>
                </select>

                <br>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-lg m-auto" data-dismiss="modal">
                        Guardar
                    </button>
                </div>
                </div>
                <!-- formulario -->
              </div>
            </div>
          </div>
        </div>
        <!-- END MODAL PARA PRUEBA EQUIPO -->
</div>

</template>

<script>
    export default {
       data: function() {
            return {
                id: 1,
                nombre_eq: "",
                descripcion_eq: "",
                fabricante_eq: "",
                descrip_tec_eq: "",
                arch_descrip_eq: "",
                cantidad_eq: "",
                url_tec_eq: "",
                arrayEnsayos: [],
                fillEnsayos: {
                    'nombre_eq': '',
                    'descripcion_eq': '',
                    'cantidad_eq': '',
                    'fabricante_eq': '',
                    'descrip_tec_eq': '',
                    'arch_descrip_eq': '',
                    'url_tec_eq': '',
                },
            }
        },
        methods: {
            getEnsayos (){
                this.arrayEnsayos.push({
                    id: this.id,
                    nombre_eq: this.nombre_eq,
                    descripcion_eq: this.descripcion_eq,
                    cantidad_eq: this.cantidad_eq,
                    fabricante_eq: this.fabricante_eq,
                    descrip_tec_eq: this.descrip_tec_eq,
                    arch_descrip_eq: this.arch_descrip_eq,
                    url_tec_eq: this.url_tec_eq,
                });
                this.id = this.id + 1;
                this.nombre_eq = "";
                this.descripcion_eq = "";
                this.fabricante_eq = "";
                this.descrip_tec_eq = "";
                this.arch_descrip_eq = "";
                this.cantidad_eq = "";
                this.url_tec_eq = "";
            },
            deleteEnsayos (index, ensayo) {
                var index = this.arrayEnsayos.indexOf(ensayo);
                if(index>-1){
                    this.arrayEnsayos.splice(index, 1);
                }
            },
            editarEnsayos (ensayo) {
                this.fillEnsayos.nombre_eq = ensayo.nombre_eq;
                this.fillEnsayos.descripcion_eq = ensayo.descripcion_eq;
                this.fillEnsayos.cantidad_eq = ensayo.cantidad_eq;
                this.fillEnsayos.fabricante_eq = ensayo.fabricante_eq;
                this.fillEnsayos.arch_descrip_eq = ensayo.arch_descrip_eq;
                this.fillEnsayos.url_tec_eq = ensayo.url_tec_eq;
                this.fillEnsayos.descrip_tec_eq = ensayo.descrip_tec_eq;
                $('#modaleditarequipo').modal('show');
            },
        },
    }
</script>

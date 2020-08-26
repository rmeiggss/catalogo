<div class="modal fade" id="mimodalequipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">

                <div class="container">
                <h1 style="text-align: center;color:black;font-size:40px;margin-bottom:10px;">Agregar Equipos a la Cotizacion</h1>
                <hr>
                    <div class="form-horizontal form-control" style="width:400px;height:1090px;margin:0 auto">
                        Nombre del Equipo:
                        <br>
                        <input class="form-control" type="text" name="nombre_equipo" id="nombre_equipo" v-model="newName">

                        Descripcion del Equipo:
                        <br>
                        <textarea style="resize: none" class="form-control" id ="descripcion_equipo" v-model="newDescrip"
                                  name="descripcion_equipo" rows="5" cols="5"></textarea>

                        Cantidad de Equipos:
                        <input class="form-control" type="text" name="cantidad" id="cantidad" v-model="newCantidad">

                        Fabricante del Equipo:
                        <input class="form-control" type="text" name="fabricante" id="fabricante" v-model="newFabric">

                        Descripcion Tecnica del Equipo:
                        <textarea style="resize: none" class="form-control" name="descrip_tec_equipo" v-model="newTecDescrip"
                                  id="descrip_tec_equipo" rows="5" cols="5"></textarea>

                        URL de la Ficha Tecnica del Equipo:
                        <textarea style="resize: none" class="form-control" name="url_ficha_tec" v-model="newUrlFicha"
                                  id="url_ficha_tec" rows="5" cols="5"></textarea>

                        <div class="form-group">
                            <label for="archiv_descrip_equipo">Adjuntar un archivo de la descripcion del equipo</label>
                            <input type="file" id="archiv_descrip_equipo" v-model="newFileDescrip" name="archiv_descrip_equipo">
                        </div>

                        Estado de la Ficha Tecnica:
                        <select class="form-control" name="estado_ficha_tec" v-model="newEstadoFich">
                            <option value="op1">Se describe en el formulario</option>
                            <option value="op2">Se proporciona el URL en el formulario</option>
                            <option value="op3">Se describe y se indica el URL en el formulario</option>
                            <option value="op4">No se precisa la Ficha Tecnica en el formulario</option>
                        </select>
                        <br>
                        <button class="btn btn-primary btn-lg" type="submit" name="" value="Guardar">Guardar</button>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
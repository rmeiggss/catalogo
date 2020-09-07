<template>

<div class="form control">
            <div>
	            <table class="table table-bordered">
	            	<thead>
		                <tr>
		                    <th class="text-center">Identificador</th>
		                    <th class="text-center">Nombre del Equipo</th>
		                    <th class="text-center">Descripcion del Equipo</th>
		                    <th class="text-center">Cantidad</th>
		                    <th class="text-center">Fabricante</th>
		                    <th class="text-center">Descripcion Ficha Tecnica</th>
		                    <th class="text-center">URL Ficha Tecnica</th>
		                    <th class="text-center">Nueva Prueba</th>
		                    <th class="text-center">Acciones</th>
		                </tr>
	                </thead>
	                <tbody>
		                <tr v-for="equipo in arrayEquipos" :key="equipo.id">
		                    <td class="text-center" v-text="equipo.id"></td>
		                    <td class="text-center" v-text="equipo.nombre_eq"></td>
		                    <td class="text-center" v-text="equipo.descripcion_eq"></td>
		                    <td class="text-center" v-text="equipo.cantidad_eq"></td>
		                    <td class="text-center" v-text="equipo.fabricante_eq"></td>
		                    <td class="text-center" v-text="equipo.descrip_tec_eq"></td>
		                    <td class="text-center" v-text="equipo.url_tec_eq"></td>
		                    <td class="text-center">
		                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mimodalnuevaprueba"
		                        id="boton_modal" style="border-radius:5px;">
		                        	Nueva Prueba
		                        </button>
		                    </td>
		                    <td class="text-center">
		                        <button class="btn btn-warning btn-sm" @click="loadFieldsUpdate(equipo)" data-toggle="modal"
		                                data-target="#modaleditarequipo" style="border-radius:5px;">
		                            Editar
		                        </button>
		                        <button class="btn btn-danger btn-sm" style="border-radius:5px;" @click="deleteEquipos(equipo)">
		                            Eliminar
		                        </button>
		                    </td>
		                </tr>
	                </tbody>
	            </table>
        	</div>
        <!-- MI MODAL EQUIPO -->
        <div class="modal fade" id="mimodalequipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        	<span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                        <h1 style="text-align: center;color:black;font-size:40px;margin-bottom:10px;">
                        	Agregar Equipos a la Cotizacion
                        </h1>
                        <hr>
                            <div class="form-horizontal form-control" style="width:400px;height:1090px;margin:0 auto">
                                <label>Nombre del Equipo:</label>
                                <br>
                                <input class="form-control" type="text" name="nombre_eq" id="nombre_eq" v-model="nombre_eq">

                                <label>Descripcion del Equipo:</label>
                                <br>
                                <textarea style="resize: none" class="form-control" id ="descripcion_eq" v-model="descripcion_eq"
                                          name="descripcion_eq" rows="5" cols="5"></textarea>

                                <label>Cantidad de Equipos:</label>
                                <input class="form-control" type="text" name="cantidad_eq" id="cantidad_eq" v-model="cantidad_eq">

                                <label>Fabricante del Equipo:</label>
                                <input class="form-control" type="text" name="fabricante_eq" id="fabricante_eq" v-model="fabricante_eq">

                                <label>Descripcion Tecnica del Equipo:</label>
                                <textarea style="resize: none" class="form-control" name="descrip_tec_eq" v-model="descrip_tec_eq"
                                          id="descrip_tec_eq" rows="5" cols="5"></textarea>

                                <label>URL de la Ficha Tecnica del Equipo:</label>
                                <textarea style="resize: none" class="form-control" name="url_tec_eq" v-model="url_tec_eq"
                                          id="url_tec_eq" rows="5" cols="5"></textarea>

                                <div class="form-group">
                                    <label for="archiv_descrip_equipo">Adjuntar un archivo de la descripcion del equipo</label>
                                    <input type="file" id="arch_descrip_eq" name="arch_descrip_eq">
                                </div>

                                <label>Estado de la Ficha Tecnica:</label>
                                <select class="form-control" name="estado_tec_eq" v-model="estado_tec_eq">
                                    <option value="op1">Se describe en el formulario</option>
                                    <option value="op2">Se proporciona el URL en el formulario</option>
                                    <option value="op3">Se describe y se indica el URL en el formulario</option>
                                    <option value="op4">No se precisa la Ficha Tecnica en el formulario</option>
                                </select>
                                <br>
                            </div>

                            <div class="modal-footer">
	                            <button class="btn btn-primary btn-lg" @click="saveEquipos()" v-if="update == 0"
	                                		data-dismiss="modal">
	                                Añadir
	                            </button>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MI MODAL EQUIPO -->
</div>

</template>

<script>
export default {
        data(){
            return{
                nombre_eq:"",
                descripcion_eq:"",
                fabricante_eq:"",
                descrip_tec_eq:"",
                arch_descrip_eq:"",
                cantidad_eq: "",
                estado_tec_eq:"",
                url_tec_eq:"",
                update:0,
                arrayEquipos:[],
            }
        },
        methods:{
        	getEquipos(){
                let me = this;
                let url = '/cot_ensayos'
                axios.get(url).then(function (response) {
                    me.arrayEquipos = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            saveEquipos(){
                let me = this;
                let url = '/cot_ensayos/guardar'
                axios.post(url,{
                	'nombre_eq': this.nombre_eq,
	                'descripcion_eq': this.descripcion_eq,
	                'fabricante_eq': this.fabricante_eq,
	                'descrip_tec_eq': this.descrip_tec_eq,
	                'arch_descrip_eq': this.arch_descrip_eq,
	                'cantidad_eq': this.cantidad_eq,
	                'estado_tec_eq': this.estado_tec_eq,
	                'url_tec_eq': this.url_tec_eq,
                }).then(function (response) {
                    me.getEquipos();
                    me.clearFields();
                })
                .catch(function (error) {
                    console.log(error);
                });

            },
            updateEquipos(){
                let me = this;
                axios.put('/cot_ensayos/editar',{
                	'id': this.update,
                    'nombre_eq': this.nombre_eq,
	                'descripcion_eq': this.descripcion_eq,
	                'fabricante_eq': this.fabricante_eq,
	                'descrip_tec_eq': this.descrip_tec_eq,
	                'arch_descrip_eq': this.arch_descrip_eq,
	                'cantidad_eq': this.cantidad_eq,
	                'estado_tec_eq': this.estado_tec_eq,
	                'url_tec_eq': this.url_tec_eq,
                }).then(function (response) {
                   me.getEquipos();
                   me.clearFields();
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            loadFieldsUpdate(data){
                this.update = data.id
                let me =this;
                let url = '/cot_ensayos/buscar?id='+this.update;
                axios.get(url).then(function (response) {
                	me.nombre_eq = response.data.nombre_eq;
                    me.descripcion_eq = response.data.descripcion_eq;
                    me.fabricante_eq= response.data.fabricante_eq;
                    me.descrip_tec_eq= response.data.descrip_tec_eq;
                    me.cantidad_eq= response.data.cantidad_eq;
                    me.estado_tec_eq= response.data.estado_tec_eq;
                    me.url_tec_eq= response.data.url_tec_eq;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            deleteEquipos(data){
                let me =this;
                let equipo_id = data.id
                if (confirm('¿Seguro que deseas borrar este equipo?')) {
                    axios.delete('/cot_ensayos/borrar/'+equipo_id
                    ).then(function (response) {
                        me.getEquipos();
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
            },
            clearFields(){
                this.nombre_eq = "";
                this.descripcion_eq = "";
                this.fabricante_eq = "";
                this.descrip_tec_eq = "";
                this.arch_descrip_eq = "";
                this.cantidad_eq = "";
                this.estado_tec_eq = "";
                this.url_tec_eq = "";
                this.update = 0;
            }
   		},
   		mounted() {
           this.getEquipos();
        }
	}
</script>

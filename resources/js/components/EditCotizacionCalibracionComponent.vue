<template>
    <!--Form content-->
    <div class="invoice p-3 mb-3">
        <form ref="form" method="POST" :action="computedAction">
            <!-- Cabecera fila 1 -->
            <input name="_method" type="hidden" value="PATCH">
            <input name="_token" type="hidden" v-model="token">
            <input name="id_cotizacion" type="hidden" v-model="cotizacion.COTIP_Codigo">
            <div class="row row-sm invoice-info">
                <div class="col-sm-4 invoice-col">
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Solicitante</label>
                        <select class="col-sm-6 form-control-sm" name="contacto" v-model="solicitanteSelected" @change="seleccionarContacto()">
                            <option v-for="solicitante in solicitantes"
                            v-bind:value="solicitante.SOLIP_Codigo"
                            v-bind:key="solicitante.SOLIP_Codigo">{{ solicitante.SOLIC_Nombre }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 invoice-col">
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Fecha</label>
                        <input type="date" class="col-sm-6 form-control-sm" v-model="cotizacion.COTIC_Fecha" autocomplete="off" name="fecha" ref="fecha" />
                    </div>
                </div>
                <div class="col-sm-4 invoice-col">
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Numero</label>
                        <input type="text" v-model.number="cotizacion.COTIC_Numero" class="col-sm-3 form-control-sm" maxlength="11" autocomplete="off" ref="numero" style="text-align: right;" />
                    </div>
                </div>
            </div>
            <!-- /Cabecera fila 1 -->
            <!-- Cabecera fila 2 -->
            <div class="row row-sm invoice-info">
                <div class="col-sm-4 invoice-col">
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Contacto</label>
                        <select v-model="cotizacion.id_contacto" class="col-sm-6 form-control-sm" name="contacto" ref="contacto" @change="seleccionarSolicitante()">
                           <option v-for="contacto in contactos" v-bind:value="contacto.id_contacto" v-bind:key="contacto.id_contacto">{{ contacto.nombre_contacto }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 invoice-col">
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Usuario</label>
                        <select v-model="cotizacion.USUA_Codigo" class="col-sm-6 form-control-sm" name="usuario" ref="usuario">
                            <option v-for="usuario in usuarios" v-bind:value="usuario.id" v-bind:key="usuario.id">{{ usuario.name }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 invoice-col">
                    <div class="row form-group"></div>
                </div>
            </div>
            <!-- /Cabecera fila 2 -->
            <!--Detalle Cotizacion-->
            <div class="row invoice-info">
                <a href="javascript:void(0);" id="btn-agregar-equipo" @click="addEquipo()" class="btn btn-info btn-sm m-2">
                    Equipo&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
                </a>
                <div class="col-12 table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 5%;">Eliminar</th>
                                <th style="width: 10%;">Nombre</th>
                                <th style="width: 15%;">Descripcion</th>
                                <th style="width: 15%;">Fabricante</th>
                                <th style="width: 5%;">Ficha Técnica</th>
                                <th style="width: 5%;">Costo</th>
                                <th style="width: 5%;">Cantidad</th>
                                <th style="width: 5%;">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center" v-for="(cotdetalle,index) in equipos">
                                <td>
                                    <button type="button" @click="deleteEquipo(index)" class="btn btn-outline-danger btn-sm">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                    <input type="hidden" name="codigodet[]" v-model="cotdetalle.CODEP_Codigo" class="form-control-sm">
                                </td>
                                <td>
                                    <input type="text" class="form-control-sm w-100" name="nombre[]" v-model="cotdetalle.CODEC_Nombre_Equipo" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" class="form-control-sm w-100" name="descripcion[]" v-model="cotdetalle.CODEC_Descripcion_Equipo" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" class="form-control-sm w-100" name="fabricante[]" v-model="cotdetalle.CODEC_Fabricante_Equipo" autocomplete="off">
                                </td>
                                <!--td class="pb-0 mb-0"><i class="far fa-file-pdf" style="color:red;font-size: 23px;"></i></td-->
                                <td>
                                    <button type="button" class="btn btn-outline-warning btn-sm"
                                        @click="editEquipo(index)" title="Agregar ficha técnica"><i class="fa fa-file" aria-hidden="true"></i></button>
                                </td>
                                <td>
                                    <input type="text" class="form-control-sm w-100 text-right" name="unitario[]"
                                        v-model.number="cotdetalle.CODEC_Costo" autocomplete="off" @keypress="restringirSoloNumerosDecimales($event)" @focusout="realizarCalculosDeCalibracion($event, index)" />
                                </td>
                                <td>
                                    <input type="text" class="form-control-sm w-100 text-right" name="cantidad[]"
                                        v-model.number="cotdetalle.CODEC_Cantidad" autocomplete="off" @keypress="restringirSoloNumerosEnteros($event)" @focusout="realizarCalculosDeCalibracion($event, index)" />
                                </td>
                                <td>
                                    <input type="text" class="form-control-sm w-100 text-right" name="subtotaldet[]"
                                        v-model.number="(isNaN(cotdetalle.CODEC_SubTotal) || cotdetalle.CODEC_SubTotal == '') ? '0.00' : (parseFloat(cotdetalle.CODEC_SubTotal)).toFixed(2)"
                                        autocomplete="off" readonly="readonly" style="background-color: #2883f5; color: #ffffff;" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/Detalle Cotizacion-->
            <!--Subtotales-->
            <div class="row invoice-info">
                <div class="col-8"></div>
                <div class="col-4">
                    <div class="table-responsive table-sm">
                        <table class="table float-right">
                            <tr>
                                <td class="text-right">
                                    <strong class="mr-2">Subtotal S/.</strong>
                                    <input type="text" v-model="SubTotal" name="subtotal" class="form-control-sm w-25 text-right" readonly="readonly" />
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <strong class="mr-2">I.G.V. S/. (18%)</strong>
                                    <input type="text" v-model="Igv" name="igv" class="form-control-sm w-25 text-right" readonly="readonly" />
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <strong class="mr-2">Total S/.</strong>
                                    <input type="text" v-model="Total" name="total" class="form-control-sm w-25 text-right" readonly="readonly" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!--/Subtotales-->
            <!--Botones-->
            <div class="row text-left">
                <div class="col text-left">
                    <button type="button" class="btn btn-info" id="btn-actualizar-cotizacion-calibracion" @click="updateCotizacion()">
                        Actualizar&nbsp;&nbsp;<i class="fa fa-edit" aria-hidden="true"></i>&nbsp;<img :src="'/images/load.gif'" style="display: none; width: 1em;" />
                    </button>
                    <button type="button" class="btn btn-danger" @click="irAListado()">
                        Ir al listado&nbsp;&nbsp;<i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <!--/Botones-->
        </form>
        <!-- Modal Ficha Técnica -->
        <div class="modal fade" id="modal-ficha-tecnica" tabindex="-1" role="dialog" aria-labelledby="modal-ficha-tecnica-label" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-ficha-tecnica-label">
                            Ficha Técnica: {{ equipo.CODEC_Nombre_Equipo }}
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row form-group">
                                <div class="col-md-3">Descripción</div>
                                <div class="col-md-9">
                                    <textarea style="resize: none" class="form-control" v-model="equipo.CODEC_Descripcion_Ficha_Tecnica_Equipo" rows="3" cols="5" name="ficha[]"></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-3">Url</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" v-model="equipo.CODEC_Url_Ficha_Tecnica_Equipo" name="url[]" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-3">Archivo (Descripción de equipo)</div>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" id="archivoFichaTecnica" />
                                    <!-- <p class="font-weight-bold" id="filePath">{{equipo.CODEC_Archivo_Descripcion_Equipo}}</p> -->
                                    <p class="font-weight-bold">{{equipo.CODEC_Archivo_Descripcion_Equipo}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-sm" @click="updateFichaEquipo()">
                            Aceptar&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" @click="cancelUpdateFichaEquipo()">
                            Cancelar&nbsp;&nbsp;<i class="fa fa-ban" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal Ficha Técnica -->
    </div>
    <!--/Form content-->
</template>

<script>
    export default {
        data() {
            return {
                cotizacion: {},
                equipo: {},
                equipos: [],
                contactos: [],
                usuarios: [],
                solicitantes: [],
                saveData: null,
                idxEquipo: null,
                file: '',
                SubTotal: '0.00',
                Igv: '0.00',
                Total: '0.00',

                solicitanteSelected: null,
            };
        },
        props: {
            codigo: String,
            token: String
        },
        created() {
            this.getEquipos(this.codigo);
            this.getCotizacion(this.codigo);
            this.listarContactos();
            this.listarUsuarios();
            this.listarSolicitantes();
        },
        mounted() {
            console.log('Component mounted.');
        },
        computed: {
            // setSubTotal: function() {
            //     var suma = 0;
            //     this.equipos.forEach((equipo, index) => {
			// 		if (isNaN(equipo.CODEC_SubTotal) || equipo.CODEC_SubTotal < 0 || equipo.CODEC_SubTotal == '')
			// 			suma += 0;
			// 		else
			// 			suma += parseFloat(equipo.CODEC_SubTotal);
            //     });
            //     return suma.toFixed(2);
            // },
            // setIgv: function() {
            //     return (Number(this.setSubTotal) * 0.18).toFixed(2);
            // },
            // setTotal: function() {
            //     return (Number(this.setSubTotal) + Number(this.setIgv)).toFixed(2);
            // },
            computedAction: function() {
                return '/cotizacion/' + this.codigo;
            }
        },
        methods: {
            /*Equipos*/
            getEquipos(id) {
                var url = '/cotizaciondetalle/' + id + '/list';
                axios.get(url).then(response => {
                    this.equipos = response.data;
                    this.setSubTotal();
                    this.setIgv();
                    this.setTotal();
                }).catch(error => {
                    console.log(error);
                });
            },
            addEquipo() {
                let fila = {
                    CODEP_Codigo: "",
                    CODEC_Nombre_Equipo: "",
                    CODEC_Descripcion_Equipo: "",
                    CODEC_Fabricante_Equipo: "",
                    CODEC_Cantidad: "",
                    CODEC_Costo: "",
                    CODEC_SubTotal: "",
                    CODEC_Descripcion_Ficha_Tecnica_Equipo: "",
                    CODEC_Url_Ficha_Tecnica_Equipo: "",
                    CODEC_Archivo_Descripcion_Equipo: ""
                };
                this.equipos.push(fila);
            },
            editEquipo(index) {
                $('#modal-ficha-tecnica').modal();
                this.idxEquipo = index;
                this.equipo = {};
                Object.assign(this.equipo, this.equipos[index]);
                // this.equipo = JSON.parse(JSON.stringify(this.equipos[index]));
                $("#file").val('');
                $('#archivoFichaTecnica').val('');
            },
            updateFichaEquipo() {
                let fileUploadedArray = $('#archivoFichaTecnica').prop('files');

                if ((this.equipo.CODEC_Descripcion_Ficha_Tecnica_Equipo == null || this.equipo.CODEC_Descripcion_Ficha_Tecnica_Equipo.trim() == '') ||
                    (typeof fileUploadedArray === 'undefined' && fileUploadedArray.length == 0 )
                ) {
                    Swal.fire({
                        title: '¡Debe ingresar al menos la descripción de la ficha!',
                        text: '',
                        icon: 'warning',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    return false;
                };

                if(fileUploadedArray.length > 0){
                    this.equipo.archivo = fileUploadedArray[0];
                    this.equipo.CODEC_Archivo_Descripcion_Equipo = fileUploadedArray[0].name;
                    this.equipos[this.idxEquipo] = this.equipo;
                    this.equipo = {};
                    this.idxEquipo = null;
                    fileUploadedArray = [];
                    $('#archivoFichaTecnica').val('');
                    $('#modal-ficha-tecnica').modal('hide');

                }else{
                    this.equipos[this.idxEquipo] = this.equipo;
                    this.equipo = {};
                    this.idxEquipo = null;

                    $('#archivoFichaTecnica').val('');
                    $('#modal-ficha-tecnica').modal('hide');
                }
            },
            cancelUpdateFichaEquipo()
            {
                this.equipo.CODEC_Descripcion_Ficha_Tecnica_Equipo = '';
                this.equipo.CODEC_Url_Ficha_Tecnica_Equipo = '';
                this.idxEquipo = null;
                $('#modal-ficha-tecnica').modal('hide');
            },
            deleteEquipo(index) {
                this.mostrarMensajeConfirmacion('¿Está seguro de eliminar este equipo?', 'Si, eliminar', 'No, cancelar').then((result) => {
                    if (result.isConfirmed) {
                        this.equipos.splice(index, 1);
                        this.setSubTotal();
                        this.setIgv();
                        this.setTotal();
                        this.mostrarMensajeInformacion('¡El equipo se eliminó correctamente!', 'success');
                    }
                });
            },
            onChangeFileUpload() {
                this.file = this.$refs.file.files[0];
            },
            getCotizacion(id) {
                var url = '/cotizacion/' + id + '/get';
                axios.get(url).then(response => {
                    let resultado = response.data;

                    resultado.COTIC_Fecha = (resultado.COTIC_Fecha_Cotizacion??resultado.COTIC_FechaRegistro).split(' ')[0];
                    this.cotizacion = resultado;
                    this.solicitanteSelected = resultado.SOLIP_Codigo;

                });
            },
            updateCotizacion(equipos) {
                let url = '/calibracion/update';
                if (typeof this.cotizacion.id_contacto == "undefined" || this.cotizacion.id_contacto == '') {
                    this.$refs.contacto.focus();
                    this.mostrarMensajeInformacion('¡Debe seleccionar un contacto!', 'warning');
                } else if (typeof this.cotizacion.COTIC_Fecha == "undefined" || this.cotizacion.COTIC_Fecha == '') {
                    this.$refs.fecha.focus();
                    this.mostrarMensajeInformacion('¡Debe ingresar la fecha!', 'warning');
                } else if (typeof this.cotizacion.COTIC_Numero == "undefined" || this.cotizacion.COTIC_Numero == '') {
                    this.$refs.numero.focus();
                    this.mostrarMensajeInformacion('¡Debe ingresar el número!', 'warning');
                } else if (typeof this.cotizacion.USUA_Codigo == "undefined" || this.cotizacion.USUA_Codigo == '') {
                    this.$refs.usuario.focus();
                    this.mostrarMensajeInformacion('¡Debe seleccionar un usuario!', 'warning');
                } else if (this.equipos.length == 0) {
                    this.mostrarMensajeInformacion('¡Debe ingresar al menos un equipo!', 'warning');
                } else if ($(this.equipos).filter((i, equipo) => (equipo.CODEC_Nombre_Equipo.trim() == '')).length != 0) {
					this.mostrarMensajeInformacion('¡Debe ingresar el nombre en todos los equipos!', 'warning');
                } else if ($(this.equipos).filter((i, equipo) => (equipo.CODEC_Descripcion_Equipo.trim() == '')).length != 0) {
					this.mostrarMensajeInformacion('¡Debe ingresar la descripción en todos los equipos!', 'warning');
                } else if ($(this.equipos).filter((i, equipo) => (equipo.CODEC_Fabricante_Equipo.trim() == '')).length != 0) {
                    this.mostrarMensajeInformacion('¡Debe ingresar el fabricante en todos los equipos!', 'warning');
                } else if ($(this.equipos).filter((i, equipo) => (equipo.CODEC_Descripcion_Ficha_Tecnica_Equipo.trim() == '') && (equipo.CODEC_Archivo_Descripcion_Equipo.trim() == '')).length != 0) {
                    this.mostrarMensajeInformacion('¡Debe registrar la descripción de ficha técnica en todos los equipos!', 'warning');
                } else if ($(this.equipos).filter((i, equipo) => (equipo.CODEC_Costo == '' || equipo.CODEC_Costo == 0)).length != 0) {
					this.mostrarMensajeInformacion('¡Debe ingresar el costo en todos los equipos!', 'warning');
                } else if ($(this.equipos).filter((i, equipo) => (equipo.CODEC_Cantidad == '' || equipo.CODEC_Cantidad == 0)).length != 0) {
					this.mostrarMensajeInformacion('¡Debe ingresar la cantidad en todos los equipos!', 'warning');
                } else {
                    this.mostrarMensajeConfirmacion('¿Está seguro de actualizar la cotización?', 'Si, registrar', 'No,     cancelar').then((result) => {
                        if (result.isConfirmed) {
                            const config = {
                                headers: {
                                    'content-type': 'multipart/form-data',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                }
                            };
                            let formData = new FormData();
                            formData.append('id_cotizacion', this.cotizacion.COTIP_Codigo);
                            formData.append('contacto', this.cotizacion.id_contacto);
                            formData.append('fecha', this.cotizacion.COTIC_Fecha);
                            formData.append('numero', this.cotizacion.COTIC_Numero);
                            formData.append('usuario', this.cotizacion.USUA_Codigo);
                            this.equipos.forEach((equipo, i) => {
                                formData.append(`equipos[${i}][CODEP_Codigo]`, equipo.CODEP_Codigo == undefined ? null : equipo.CODEP_Codigo);
                                formData.append(`equipos[${i}][COTIP_Codigo]`, equipo.COTIP_Codigo);
                                formData.append(`equipos[${i}][CODEC_Nombre_Equipo]`, equipo.CODEC_Nombre_Equipo);
                                formData.append(`equipos[${i}][CODEC_Descripcion_Equipo]`, equipo.CODEC_Descripcion_Equipo);
                                formData.append(`equipos[${i}][CODEC_Fabricante_Equipo]`, equipo.CODEC_Fabricante_Equipo);
                                formData.append(`equipos[${i}][CODEC_Cantidad]`, equipo.CODEC_Cantidad);
                                formData.append(`equipos[${i}][CODEC_Costo]`, equipo.CODEC_Costo);
                                formData.append(`equipos[${i}][CODEC_SubTotal]`, equipo.CODEC_SubTotal);
                                formData.append(`equipos[${i}][CODEC_Descripcion_Ficha_Tecnica_Equipo]`, equipo.CODEC_Descripcion_Ficha_Tecnica_Equipo);
                                formData.append(`equipos[${i}][CODEC_Url_Ficha_Tecnica_Equipo]`, equipo.CODEC_Url_Ficha_Tecnica_Equipo ?? '');
                                formData.append(`equipos[${i}][CODEC_Archivo_Descripcion_Equipo]`, equipo.CODEC_Archivo_Descripcion_Equipo);
                                formData.append(`equipos[${i}][tempFile]`, equipo.archivo === undefined ? null : equipo.archivo);
                            });
                            formData.append('subtotal', this.SubTotal);
                            formData.append('igv', this.Igv);
                            formData.append('total', this.Total);
                            formData.append('_method', 'PUT');

                            $('#btn-actualizar-cotizacion-calibracion').attr('disabled', true);
                            $('#btn-actualizar-cotizacion-calibracion > img').css({
                                'display': 'inline-block'
                            });
                            // axios.put(url, {
                            //     id_cotizacion: this.cotizacion.COTIP_Codigo,
                            //     contacto: this.cotizacion.id_contacto,
                            //     fecha: this.cotizacion.COTIC_Fecha,
                            //     numero: this.cotizacion.COTIC_Numero,
                            //     usuario: this.cotizacion.USUA_Codigo,
                            //     equipos: this.equipos,
                            //     subtotal: this.setSubTotal,
                            //     igv: this.setIgv,
                            //     total: this.setTotal
                            // })
                            axios.post(url,
                                formData, config
                            )
                            .then(response => {
                                Swal.fire({
                                    title: '"' + response.data + '"',
                                    icon: 'success',
                                    confirmButtonText: 'Aceptar',
                                    allowOutsideClick: false
                                }).then(function() {
                                    location.href = '/calibracion';
                                });
                                $('#btn-actualizar-cotizacion-calibracion > img').css({
                                    'display': 'none'
                                });
                            }).catch(error => {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'error',
                                    title: error,
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                                $('#btn-actualizar-cotizacion-calibracion').attr('disabled', false);
                                $('#btn-actualizar-cotizacion-calibracion > img').css({
                                    'display': 'none'
                                });
                            });
                        }
                    });
                }
            },
            listarContactos() {
                var url = '/contacto/list';
                axios.get(url).then(response => {
                    this.contactos = response.data;
                });
            },
            listarUsuarios() {
                var url = '/usuario/list';
                axios.get(url).then(response => {
                    this.usuarios = response.data;
                });
            },
            listarSolicitantes() {
                var url = '/solicitante/list';
                axios.get(url).then(response => {
                    this.solicitantes = response.data;
                });
            },
            irAListado() {
                this.mostrarMensajeConfirmacion('¿Está seguro que desea cancelar el registro?', 'Si, cancelar', 'No, permanecer').then((result) => {
                    if (result.isConfirmed) {
                        location.href = '/calibracion';
                    }
                });
            },
            mostrarMensajeInformacion(titulo, icono) {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-primary',
                    },
                    buttonsStyling: false
                });
                swalWithBootstrapButtons.fire({
                    title: titulo,
                    icon: icono,
                    confirmButtonText: 'Aceptar',
                    allowOutsideClick: false
                });
            },
            mostrarMensajeConfirmacion(titulo, textoConfirma, textoCancela) {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-primary margin-button-confirm-swal',
                        cancelButton: 'btn btn-danger margin-button-confirm-swal'
                    },
                    buttonsStyling: false
                });
                return swalWithBootstrapButtons.fire({
                    title: titulo,
                    text: '',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: textoConfirma,
                    cancelButtonText: textoCancela,
                    reverseButtons: false,
                    allowOutsideClick: false
                });
            },
            restringirSoloNumerosEnteros(e) {
                var regex = new RegExp('^[0-9]+$');
                var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                if (!regex.test(key)) {
                    e.preventDefault();
                    return false;
                }
            },
            restringirSoloNumerosDecimales(e) {
                if (!((e.which >= 48 && e.which <= 57) ||
                        (e.which == 40 || e.which == 41) ||
                        (e.which == 8 || e.which == 0 || e.which == 46))) {
                    e.preventDefault();
                    return false;
                }
            },
            realizarCalculosDeCalibracion(e, index)
            {
                let equipo = this.equipos[index];
				let cantidad = isNaN(parseInt(equipo.CODEC_Cantidad)) ? 0 : parseInt(equipo.CODEC_Cantidad);
				let costo = isNaN(parseFloat(equipo.CODEC_Costo)) ? 0 : parseFloat(equipo.CODEC_Costo);
                this.equipos[index].CODEC_Costo = this.formatearModeloADecimal(equipo.CODEC_Costo);
                this.equipos[index].CODEC_SubTotal = isNaN(parseFloat(cantidad * costo)) ? 0 : parseFloat(cantidad * costo);
                this.setSubTotal();
                this.setIgv();
                this.setTotal();
            },
            formatearModeloADecimal(value) {
				value = isNaN(parseFloat(value)) ? '0.00' : (parseFloat(value)).toFixed(2);
				return value;
			},
            formatearDecimales(e, control) {
                control.value = isNaN(parseFloat(control.value)) ? '0.00' : (parseFloat(control.value)).toFixed(2);
            },
            setSubTotal() {
                var suma = 0;
                this.equipos.forEach((equipo, index) => {
					if (isNaN(equipo.CODEC_SubTotal) || equipo.CODEC_SubTotal < 0 || equipo.CODEC_SubTotal == '')
						suma += 0;
					else
						suma += parseFloat(equipo.CODEC_SubTotal);
                });
                this.SubTotal = (suma).toFixed(2);
            },
            setIgv() {
                this.Igv = (Number(this.SubTotal) * 0.18).toFixed(2);
            },
            setTotal() {
                this.Total = (Number(this.SubTotal) + Number(this.Igv)).toFixed(2);
            },
            seleccionarSolicitante(){
                var url = '/contacto/solicitante/get/' + this.cotizacion.id_contacto
                    axios.get(url).then(response => {
                        this.solicitanteSelected = response.data.SOLIP_Codigo;
                    });
            },
            seleccionarContacto(){
                var url = '/solicitante/contacto/get/' + this.solicitanteSelected
                    axios.get(url).then(response => {
                        this.cotizacion.id_contacto = response.data.id_contacto;
                    });
            },
        }
    }
</script>

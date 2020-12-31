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
                        <label class="col-sm-3 col-form-label col-form-label-sm">Contacto</label>
                        <select v-model="cotizacion.id_contacto" class="col-sm-6 form-control-sm" name="contacto">
                            <option v-for="contacto in contactos" v-bind:value="contacto.id_contacto" v-bind:key="contacto.id_contacto">{{ contacto.nombre_contacto }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 invoice-col">
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Fecha</label>
                        <input type="date" class="col-sm-6 form-control-sm" v-model="cotizacion.COTIC_Fecha" autocomplete="off" name="fecha" readonly="readonly">
                    </div>
                </div>
                <div class="col-sm-4 invoice-col">
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Numero</label>
                        <input type="text" v-model="cotizacion.COTIC_Numero" class="col-sm-3 form-control-sm" maxlength="11" autocomplete="off" readonly="readonly" style="text-align: right;">
                    </div>
                </div>
            </div>
            <!-- /.Cabecera fila 1 -->
            <!-- Cabecera fila 2 -->
            <div class="row row-sm invoice-info">
                <div class="col-sm-4 invoice-col">
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Solicitante</label>
                        <select class="col-sm-6 form-control-sm" name="contacto">
                            <option v-for="solicitante in solicitantes" v-bind:value="solicitante.SOLIP_Codigo" v-bind:key="solicitante.SOLIP_Codigo">{{ solicitante.SOLIC_Nombre }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 invoice-col">
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Usuario</label>
                        <select v-model="cotizacion.USUA_Codigo" class="col-sm-6 form-control-sm" name="usuario">
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
                <!--label class="col-sm-2 col-form-label col-form-label-sm">Agregar</label-->
                <a href="javascript:void(0);" id="btn-agregar-capacitacion" @click="addCapacitacion()" class="btn btn-info btn-sm m-2">
                        Capacitación&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                <div class="col-12 table-responsive">
                    <small><strong>Para configurar una capacitación primer seleccione un curso</strong></small>
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 1%;">Eliminar</th>
                                <th style="width: 8%;">Curso</th>
                                <th style="width: 10%;">Costo</th>
                                <th style="width: 10%;">Cantidad</th>
                                <th style="width: 10%;">Sub Total</th>
                                <th style="width: 10%;">Descuento</th>
                                <th style="width: 10%;">Sub Total Descontado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center" v-for="(capacitacion, index) in capacitaciones">
                                <td>
                                    <button type="button" @click="deleteCapacitacion(index)" class="btn btn-outline-danger btn-sm">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                    <input type="hidden" name="codigodet[]" v-model="capacitacion.COCAP_Codigo" class="form-control-sm">
                                </td>
                                <td>
                                    <select v-model="capacitacion.id_curso" class="form-control-sm curso" name="curso" ref="curso" @change="getInfoCurso($event, index)">
                                        <option v-for="curso in cursos" v-bind:value="curso.id_curso" v-bind:key="curso.id_curso">{{ curso.CURSOC_Nombre }}</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control-sm w-100 text-right" name="unitario[]" ref="costo" v-model="capacitacion.COCAC_Costo_Curso_Original" autocomplete="off" @keypress="restringirSoloNumerosDecimales($event)" @focusout="realizarCalculosDeCapacitacion($event, index)"
                                        :disabled="capacitacion.COCAP_Codigo == ''" readonly />
                                </td>
                                <td>
                                    <input type="text" class="form-control-sm w-100 text-right cantidad" name="cantidad[]" ref="cantidad" v-model.number="capacitacion.COCAC_Cantidad" autocomplete="off" @keypress="restringirSoloNumerosEnteros($event)" @focusout="getDescuento($event, index)"
                                        :disabled="capacitacion.COCAP_Codigo == ''" />
                                </td>
                                <td>
                                    <input type="text" class="form-control-sm w-100 text-right" name="subtotalcapa[]" ref="subtotalcapa" readonly="readonly" v-model.number="(isNaN(capacitacion.COCAC_SubTotal) || capacitacion.COCAC_SubTotal == '') ? '0.00' : (parseFloat(capacitacion.COCAC_SubTotal)).toFixed(2)"
                                        autocomplete="off" style="background-color: #2883f5; color: #ffffff;" />
                                </td>
                                <td>
                                    <input type="text" class="form-control-sm w-100 text-right" name="descuento[]" ref="descuento" v-model.number="(isNaN(capacitacion.COCAC_Descuento_Porcentaje) || capacitacion.COCAC_Descuento_Porcentaje == '') ? '0 (0%)' : (parseFloat(capacitacion.COCAC_Descuento_Moneda_Real)).toFixed(2) + ' (' + capacitacion.COCAC_Descuento_Porcentaje +'%)'"
                                        autocomplete="off" style="background-color: #e64210; color: #ffffff;" readonly />
                                </td>
                                <td>
                                    <input type="text" class="form-control-sm w-100 text-right" name="costo_descontado[]" ref="costoDescontado" v-model.number="(isNaN(capacitacion.COCAC_SubTotal_Descontado) || capacitacion.COCAC_SubTotal_Descontado == '') ? '0.00' : (parseFloat(capacitacion.COCAC_SubTotal_Descontado)).toFixed(2)"
                                        readonly="readonly" autocomplete="off" style="background-color: #009c30; color: #ffffff;" />
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
                                    <input type="text" v-model="setSubTotal" name="subtotal" class="form-control-sm w-25 text-right">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <strong class="mr-2">I.G.V. S/. (18%)</strong>
                                    <input type="text" v-model="setIgv" name="igv" class="form-control-sm w-25 text-right">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <strong class="mr-2">Total S/.</strong>
                                    <input type="text" v-model="setTotal" name="total" class="form-control-sm w-25 text-right">
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
                    <button type="button" class="btn btn-info" id="btn-actualizar-cotizacion-capacitacion" @click="updateCotizacion()">
                        Actualizar&nbsp;&nbsp;<i class="fa fa-edit" aria-hidden="true"></i>&nbsp;<img :src="'/images/load.gif'" style="display: none; width: 1em;" />
                    </button>
                    <button type="button" class="btn btn-danger" @click="irAListado()">
                        Ir al listado&nbsp;&nbsp;<i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <!--/Botones-->
        </form>
    </div>
    <!--/Form content-->
</template>

<script>
    export default {
        data() {
            return {
                cotizacion: [],
                capacitaciones: [],
                cursos: [],
                contactos: [],
                usuarios: [],
                solicitantes: [],
                saveData: null,
                file: ''
            }
        },
        props: {
            codigo: String,
            token: String
        },
        created() {
            this.getCapacitaciones(this.codigo);
            this.getCotizacion(this.codigo);
            this.listarContactos();
            this.listarUsuarios();
            this.listarSolicitantes();
            this.listarCursos();
        },
        mounted() {
            console.log('Component mounted.')
        },
        computed: {
            setSubTotal: function() {
                var suma = 0;
                this.capacitaciones.forEach((capacitacion, index) => {
                    if (isNaN(capacitacion.COCAC_SubTotal_Descontado) || capacitacion.COCAC_SubTotal_Descontado < 0 || capacitacion.COCAC_SubTotal_Descontado == '')
                        suma += 0;
                    else
                        suma += parseFloat(capacitacion.COCAC_SubTotal_Descontado);
                });
                return (parseFloat(suma)).toFixed(2);
            },
            setIgv: function() {
                return (Number(this.setSubTotal) * 0.18).toFixed(2);
            },
            setTotal: function() {
                return (Number(this.setSubTotal) + Number(this.setIgv)).toFixed(2);
            },
            computedAction: function() {
                return '/cotizacion/' + this.codigo;
            }
        },
        methods: {
            getCotizacion(id) {
                var url = '/cotizacion/' + id + '/get';
                axios.get(url).then(response => {
                    let resultado = response.data;
                    resultado.COTIC_Fecha = resultado.COTIC_Fecha_Cotizacion.split(' ')[0];
                    this.cotizacion = resultado;
                    console.log(resultado);
                });
            },
            getCapacitaciones(id) {
                var url = '/cotizacioncapacitacion/' + id + '/list';
                axios.get(url).then(response => {
                    this.capacitaciones = response.data;
                }).catch(error => {
                    console.log(error);
                });
            },
            addCapacitacion() {
                let fila = {
                    COCAP_Codigo: "",
                    id_curso: "",
                    COCAC_Cantidad: "",
                    COCAC_SubTotal: "",
                    COCAC_Costo_Curso_Original: "",
                    COCAC_Descuento_Porcentaje: "",
                    COCAC_Descuento_Moneda_Real: "",
                    COCAC_SubTotal_Descontado: ""
                };
                this.capacitaciones.push(fila);
            },
			deleteCapacitacion(index) {
				this.mostrarMensajeConfirmacion('¿Está seguro de eliminar esta capacitación?', 'Si, eliminar', 'No, cancelar').then((result) => {
					if (result.isConfirmed) {
                        let _this = this;
                        let idCapacitacion = this.capacitaciones[index].COCAP_Codigo;
                        if (idCapacitacion == '') {
                            this.capacitaciones.splice(index, 1);
                            this.mostrarMensajeInformacion('¡La capacitación se eliminó correctamente!', 'success');
                        } else {
                            let url = '/cotizacioncapacitacion/delete/' + idCapacitacion;
                            axios.delete(url).then(response => {
                                this.capacitaciones.splice(index, 1);
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: '¡La capacitación se eliminó correctamente!',
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                            }).catch(error => {
                                this.mostrarMensajeInformacion(error, 'error');
                            });
                        }
					}
				});
			},
            updateCotizacion(equipos) {
                let url = '/capacitacion/update';
                if (typeof this.cotizacion.id_contacto == "undefined" || this.cotizacion.id_contacto == '') {
                    this.$refs.contacto.focus();
                    this.mostrarMensajeInformacion('¡Debe seleccionar un contacto!', 'warning');
                } else if (typeof this.cotizacion.COTIC_Fecha == "undefined" || this.cotizacion.COTIC_Fecha == '') {
                    this.mostrarMensajeInformacion('¡Debe ingresar la fecha!', 'warning');
                } else if (typeof this.cotizacion.COTIC_Numero == "undefined" || this.cotizacion.COTIC_Numero == '') {
                    this.$refs.numero.focus();
                    this.mostrarMensajeInformacion('¡Debe ingresar el número!', 'warning');
                } else if (typeof this.cotizacion.USUA_Codigo == "undefined" || this.cotizacion.USUA_Codigo == '') {
                    this.$refs.usuario.focus();
                    this.mostrarMensajeInformacion('¡Debe seleccionar un usuario!', 'warning');
                } else if (this.capacitaciones.length == 0) {
                    this.mostrarMensajeInformacion('¡Debe ingresar al menos una capacitación!', 'warning');
                } else if ($(this.capacitaciones).filter((i, capacitacion) => capacitacion.id_curso == '').length != 0) {
                    this.mostrarMensajeInformacion('¡Debe seleccionar el curso en todas las capacitaciones!', 'warning');
                } else if ($(this.capacitaciones).filter((i, capacitacion) => (capacitacion.COCAC_Cantidad == '' || capacitacion.COCAC_Cantidad == 0)).length != 0) {
                    this.mostrarMensajeInformacion('¡Debe ingresar la cantidad de alumnos en todas las capacitaciones!', 'warning');
                } else if ($(this.capacitaciones).filter((i, capacitacion) => (capacitacion.COCAC_Costo_Curso_Original == '' || capacitacion.COCAC_Costo_Curso_Original == 0)).length != 0) {
                    this.mostrarMensajeInformacion('¡Debe ingresar el costo del curso en todas las capacitaciones!', 'warning');
                } else {
                    this.mostrarMensajeConfirmacion('¿Está seguro de registrar la cotización?', 'Si, registrar', 'No, cancelar').then((result) => {
                        if (result.isConfirmed) {
                            $('#btn-actualizar-cotizacion-capacitacion').attr('disabled', true);
                            $('#btn-actualizar-cotizacion-capacitacion > img').css({
                                'display': 'inline-block'
                            });
                            axios.put(url, {
                                id_cotizacion: this.cotizacion.COTIP_Codigo,
                                contacto: this.cotizacion.id_contacto,
                                fecha: this.cotizacion.COTIC_Fecha,
                                numero: this.cotizacion.COTIC_Numero,
                                usuario: this.cotizacion.USUA_Codigo,
                                capacitaciones: this.capacitaciones,
                                subtotal: this.setSubTotal,
                                igv: this.setIgv,
                                total: this.setTotal
                            }).then(response => {
                                Swal.fire({
                                    title: '"' + response.data + '"',
                                    icon: 'success',
                                    confirmButtonText: 'Aceptar',
                                    allowOutsideClick: false
                                }).then(function() {
                                    location.href = '/capacitacion';
                                });
                                $('#btn-actualizar-cotizacion-capacitacion > img').css({
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
                                $('#btn-actualizar-cotizacion-capacitacion').attr('disabled', false);
                                $('#btn-actualizar-cotizacion-capacitacion > img').css({
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
                    console.log(this.cotizacion);
                });
            },
            listarCursos() {
                var url = '/curso/list';
                axios.get(url).then(response => {
                    this.cursos = response.data;
                });
            },
            irAListado() {
                this.mostrarMensajeConfirmacion('¿Está seguro de abortar la actualización?', 'Si, abortar', 'No, permanecer').then((result) => {
                    if (result.isConfirmed) {
                        location.href = '/capacitacion';
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
                let regex = new RegExp('^[0-9]+$');
                let key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                if (!regex.test(key)) {
                    e.preventDefault();
                    return false;
                }
            },
            restringirSoloNumerosDecimales(e) {
                if (!((e.which >= 48 && e.which <= 57) ||
                        (e.which == 40 || e.which == 41) ||
                        (e.which == 32 || e.which == 8 || e.which == 0 || e.which == 46))) {
                    e.preventDefault();
                    return false;
                }
            },
            getInfoCurso(e, index) {
                this.$refs.cantidad[index].disabled = false;
                this.$refs.costo[index].disabled = false;
                this.$refs.cantidad[index].focus();
                this.getCurso(index);
                this.getDescuento(e, index);
            },
            getCurso(index) {
                let capacitacion = this.capacitaciones[index];
                let idCurso = capacitacion.id_curso;
                if (idCurso != '') {
                    let url = '/curso/' + idCurso;
                    axios.get(url).then((response) => {
                        capacitacion.COCAC_Costo_Curso_Original = response.data.CURSOC_Costo;
                    });
                }
            },
            getDescuento(e, index) {
                let capacitacion = this.capacitaciones[index];
                let idCurso = capacitacion.id_curso;
                let cantidad = isNaN(parseInt(capacitacion.COCAC_Cantidad)) ? 0 : parseInt(capacitacion.COCAC_Cantidad);
                let costo = isNaN(parseFloat(capacitacion.COCAC_Costo_Curso_Original)) ? 0 : parseFloat(capacitacion.COCAC_Costo_Curso_Original);
                capacitacion.COCAC_SubTotal = isNaN(parseFloat(cantidad * costo)) ? 0 : parseFloat(cantidad * costo);
                if (idCurso != '' && cantidad != 0) {
                    let url = '/curso/' + idCurso + '/descuento';
                    axios.get(url).then((response) => {
                        let descuento = $(response.data).filter((i, descuento) => ((descuento.id_curso) == idCurso && (cantidad >= descuento.cantidad_min && cantidad <= descuento.cantidad_max)));
                        capacitacion.COCAC_Descuento_Porcentaje = (descuento.length != 0) ? descuento[0].descuento : 0;
                        capacitacion.COCAC_Descuento_Moneda_Real = (capacitacion.COCAC_SubTotal * capacitacion.COCAC_Descuento_Porcentaje) / 100;
                        this.realizarCalculosDeCapacitacion(e, index);
                    });
                } else {
                    capacitacion.COCAC_Descuento_Porcentaje = 0;
                    capacitacion.COCAC_Descuento_Moneda_Real = 0;
                }
            },
            realizarCalculosDeCapacitacion(e, index) {
                let capacitacion = this.capacitaciones[index];
                let controlActual = e.target;
                let cantidad = isNaN(parseInt(capacitacion.COCAC_Cantidad)) ? 0 : parseInt(capacitacion.COCAC_Cantidad);
                let costo = isNaN(parseFloat(capacitacion.COCAC_Costo_Curso_Original)) ? 0 : parseFloat(capacitacion.COCAC_Costo_Curso_Original);
                capacitacion.COCAC_Costo_Curso_Original = this.formatearDecimalesAModelo(capacitacion.COCAC_Costo_Curso_Original);
                capacitacion.COCAC_SubTotal = isNaN(parseFloat(cantidad * costo)) ? 0 : parseFloat(cantidad * costo);
                capacitacion.COCAC_Descuento_Moneda_Real = (capacitacion.COCAC_SubTotal * capacitacion.COCAC_Descuento_Porcentaje) / 100;
                capacitacion.COCAC_SubTotal_Descontado = (capacitacion.COCAC_SubTotal - capacitacion.COCAC_Descuento_Moneda_Real).toFixed(2);
            },
            formatearDecimalesAModelo(value) {
                value = isNaN(parseFloat(value)) ? '0.00' : (parseFloat(value)).toFixed(2);
                return value;
            }
        }
    }
</script>

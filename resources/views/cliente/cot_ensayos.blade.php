@extends('layouts.cliente')

@section('title', 'Laboratorio Nº6 de Electricidad de la Facultad de Ingeniería Eléctrica y Electrónica -
Universidad Nacional de Ingeniería')

@section('content')
        <style>
            .edward{
                color: green !important;
                background-color: white !important;
                border:1px solid green !important;
                border-radius: 10px !important;
            }
            .edward:hover{
                color:white !important;
                background-color: green !important;
                border-radius: 10px !important;
            }
            .btn-dec{
                border:1px solid white !important;
                color: white !important;
                width: 75% !important;
            }
            .btn-dec:hover{
                color: rgb(107, 0, 0)!important;
                background-color: white !important;
                font-weight: bold;
            }
            .men{
                background-color: #800404;
                text-align: center;
            }
            #header {
                width:fit-content;
                font-family:Arial, Helvetica, sans-serif;
                padding-left: 15rem;
            }

            ul, ol {
                list-style:none;
            }

            .nav > li {
                float:left;
                padding:1rem 0.5rem;
            }

            .nav li a {
                background-color:#800404;
                color:#fff;
                text-decoration:none;
                padding:10px 12px;
                display:block;
                font-weight: bold;
                text-align: left;
            }
            .nav li a:hover,.nav li:hover {
                background-color:#8e0606;
            }

            .nav li ul {
                display:none;
                position:absolute;
                min-width:140px;
                z-index: 9999;

            }

            .nav li:hover > ul {
                display:block;
                padding-top: 1rem;
            }

            .nav li ul li {
                position:relative;
            }

            .nav li ul li ul {
                right:-140px;
                top:0px;
            }
        </style>

        <!-- Inicio del formulario de cotizaciones de ensayos -->

        <h1 style="text-align: center;font-size:65px;color:black;">Formulario de Solicitud de Ensayo</h1>
        <hr>
<form  method="POST" action="{{ route('cot_ensayos.store') }}">
    @csrf
        <div id="crud_equipos" class="row">
            <div class="col-sm-6 border" style="padding-bottom: 8px;padding-top: 8px;">
                <h4 style="text-align: center;color:black;">Empresa Solicitante</h4>
                <div class="form-horizontal form-control" style="width:500px;height:705px;margin:0 auto">
                    Nombre del Solicitante:
                    <br>
                    <input class="form-control" type="text" name="nombre_solic" id="nombre_solic" />
                    Tipo de Solicitante:
                    <br>
                    <select class="form-control" name="tipo_solic">
                        <option value="volvo">Persona Juridica</option>
                        <option value="saab">Persona Natural</option>
                    </select>
                    RUC del Solicitante:
                    <br>
                    <input class="form-control" type="text" name="ruc_solic" id="ruc_solic" />
                    Direccion del Solicitante:
                    <br>
                    <input class="form-control" type="text" name="direc_solic" id="direc_solic" />
                    Telefono del Solicitante:
                    <input class="form-control" type="text" name="celular_solic" id="celular_solic" />
                    Email del Solicitante:
                    <input class="form-control" type="text" name="email_solic" id="email_solic" />
                    Nombre del Departamento:
                    <br>
                    <select class="form-control" name="depart_solic">
                        <option value="volvo">Lima</option>
                        <option value="saab">Arequipa</option>
                    </select>
                    Nombre de la Provincia:
                    <br>
                    <select class="form-control" name="prov_solic">
                        <option value="Lima">Lima</option>
                        <option value="Arequipa">Arequipa</option>
                    </select>
                    Nombre del Distrito:
                    <br>
                    <select class="form-control" name="dist_solic">
                        <option value="Miraflores">Miraflores</option>
                        <option value="San Juan de Luriganch">San Juan de Lurigancho</option>
                    </select>
                </div>
                <br>
            </div>

            <div class="col-sm-6 border float-right" style="padding-bottom: 8px;padding-top: 8px;">
                <h4 style="text-align: center;color:black;">Representante de la Empresa Solicitante</h4>
                <div class="form-horizontal form-control" style="width:500px;height:705px;margin:0 auto">
                    Nombre del Contacto:
                    <br>
                    <input class="form-control" type="text" name="nombre_contacto" id="nombre_contacto">
                    Correo Electronico del Contacto:
                    <br>
                    <input class="form-control" type="text" name="email_contacto" id="email_contacto">
                    Celular del Contacto:
                    <br>
                    <input class="form-control" type="text" name="celular_contacto" id="celular_contacto">
                    <br>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <h4 style="text-align:center;text-decoration: underline;color:black;margin-top:25px;">Equipos que forman parte de la Cotizacion</h4>
            <br>
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal"
                    data-target="#mimodalequipo" id="boton_modal" style="border-radius:5px;">
                Nuevo Equipo
            </button>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th class="text-center">Identificador</th>
                    <th class="text-center">Nombre del Equipo</th>
                    <th class="text-center">Descripcion del Equipo</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-center">Fabricante</th>
                    <th class="text-center">Descripcion Ficha Tecnica</th>
                    <th class="text-center">URL Ficha Tecnica del Equipo</th>
                    <th class="text-center">Nueva Prueba</th>
                    <th class="text-center">Listado de Pruebas</th>
                    <th class="text-center">Acciones</th>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Telurometro</td>
                    <td class="text-center">Equipo para medir la resistencia...</td>
                    <td class="text-center">2</td>
                    <td class="text-center">Siemens</td>
                    <td class="text-center">Equipo para medir la resistencia...</td>
                    <td class="text-center">www.sieemes.com.pe</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mimodalnuevaprueba" id="boton_modal" style="border-radius:5px;">
                        Nueva Prueba
                        </button>
                    </td>
                    <td class="text-center" style="color:white;">
                        <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#mimodallistaprueba" id="boton_modal" style="border-radius:5px;">
                        Listado de Prueba
                        </button>
                    </td>
                    <td class="text-center">
                        <a class="btn btn-warning btn-sm" href="" data-toggle="modal"
                            data-target="#mimodalequipo" style="border-radius:5px;">Editar</a>
                        <a class="btn btn-danger btn-sm" href="" style="border-radius:5px;">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td class="text-center">Telurometro</td>
                    <td class="text-center">Equipo para medir la resistencia...</td>
                    <td class="text-center">1</td>
                    <td class="text-center">Siemens</td>
                    <td class="text-center">Equipo para medir la resistencia...</td>
                    <td class="text-center">www.sieemes.com.pe</td>
                    <td class="text-center">

                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mimodalnuevaprueba" id="boton_modal" style="border-radius:5px;">
                        Nueva Prueba
                        </button>

                    </td>
                    <td class="text-center">

                        <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#mimodallistaprueba" id="boton_modal" style="color:white;border-radius:5px;">
                        Listado de Prueba
                        </button>

                    </td>
                    <td class="text-center">
                        <a class="btn btn-warning btn-sm" href="" style="border-radius:5px;">Editar</a>
                        <a class="btn btn-danger btn-sm" href="" style="border-radius:5px;">Eliminar</a>
                    </td>
                </tr>
            </table>
            @include('cliente.modales.create_equipos')
        </div>

        <div>
            <h4 style="text-align:center;color:black;">
            Ingresar los correos electrónicos a los que se les enviará la cotización en formato PDF
            </h4>
            <div class="row">

                <div class="col-sm-6" style="padding-bottom: 8px;padding-top:8px;">

                    <div class="form-horizontal form-control" style="height:150px;margin-left:10px;margin-right:0px;">
                        Correo #1:
                        <br>
                        <input class="form-control" type="text" name="correo1" id="correo1" />
                        Correo #2:
                        <br>
                        <input class="form-control" type="text" name="correo2" id="correo2" />
                    </div>
                </div>

                <div class="col-sm-6" style="padding-bottom: 8px;;padding-top:8px;">

                    <div class="form-horizontal form-control" style="height:150px;margin-left:0px;margin-right:0px">
                        Correo #3:
                        <br>
                        <input class="form-control" type="text" name="correo3" id="correo3" />
                        Correo #4:
                        <br>
                        <input class="form-control" type="text" name="correo4" id="correo4" />
                    </div>
                </div>

            </div>
        </div>

        <br>
            <button type="button" class="btn btn-info btn-lg float-left" data-toggle="modal" data-target="#"
                    id="boton_modal" style="margin-left:10px;border-radius:5px;">
                Vista Preliminar
            </button>

        <br>
        <br>
        <br>

    <center>
        <button type="submit" class="btn btn-outline-success btn-lg edward" data-toggle="modal" data-target="#"
                id="boton_modal" style="width:40%;font-size:45px;height:60px;text-transform: capitalize;">
            Solicitar Cotización
        </button>
    </center>
</form>

<!-- Fin del formulario de cotizaciones de ensayos -->

        <br>
        <br>
        <br>
        <br>


        <!-- Inicio de las ventanas modales -->

        <!-- Modal Equipos -->


        <!-- Modal Nueva Prueba -->
        <div class="modal fade" id="mimodalnuevaprueba" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">

        <!-- formulario -->
        <div class="container">
        <h1 style="text-align: center;color:black;font-size:40px;">Agregar una Nueva Prueba al Equipo Seleccionado</h1>
        <hr>
        <form class="form-horizontal form-control" style="width:400px;height:770px;margin:0 auto">
        Descripcion de la Prueba a Realizar
        <br>
        <textarea style="resize: none" class="form-control" name="" rows="5" cols="5"></textarea>
        Norma Asociada a la Prueba:
        <br>
        <input class="form-control" type="text" name="" id="primero" />
        Descripcion de la Norma:
        <br>
        <textarea style="resize: none" class="form-control" name="" rows="5" cols="5"></textarea>
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
        <input class="btn btn-primary btn-lg" type="submit" name="" value="Guardar" />
        </form>
        </div>
        <!-- formulario -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>


        <!-- Modal Listado de Prueba -->
        <div class="modal fade" id="mimodallistaprueba" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <h2 style="text-align: center;text-decoration: underline;color:black;font-size:40px;">Listado de Pruebas del Equipo Seleccionado</h2>
        <br>
        <!-- formulario -->
        <!-- formulario -->
        <table class="table table-bordered">
    <tr>
        <th class="text-center">Identificador</th>
        <th class="text-center">Descripcion de la Prueba a Realizar</th>
        <th class="text-center">Norma Asociada a la Prueba</th>
        <th class="text-center">Descripcion de la Norma</th>
        <th class="text-center">Estado de la Norma</th>
        <th class="text-center">Acciones</th>
    </tr>
    <tr>
        <td class="text-center">1</td>
        <td class="text-center">Prueba Dielectrica</td>
        <td class="text-center">Norma IEC-123456</td>
        <td class="text-center">Descripcion de la Norma</td>
        <td class="text-center">La norma se describio en el formulario</td>
        <td class="text-center">
            <a class="btn btn-warning btn-sm" href="" style="border-radius:5px;">Editar</a>
            <a class="btn btn-danger btn-sm" href="" style="border-radius:5px;">Eliminar</a>
        </td>
    </tr>
    <tr>
        <td class="text-center">2</td>
        <td class="text-center">Prueba Dielectrica</td>
        <td class="text-center">Norma IEC-123456</td>
        <td class="text-center">Descripcion de la Norma</td>
        <td class="text-center">La norma se describio en el formulario</td>
        <td class="text-center">
            <a class="btn btn-warning btn-sm" href="" style="border-radius:5px;">Editar</a>
            <a class="btn btn-danger btn-sm" href="" style="border-radius:5px;">Eliminar</a>
        </td>
    </tr>
</table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>

        <!-- Fin de las ventanas modales -->
@endsection
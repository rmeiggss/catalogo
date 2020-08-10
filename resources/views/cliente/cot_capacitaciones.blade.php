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

        <!-- Inicio del formulario de cotizaciones de capacitacion -->
        <h1 style="text-align: center;font-size:65px;color:black;">Formulario de Solicitud de Capacitacion</h1>
        <hr>

        <div class="row">
            <div class="col-sm-6 border" style="padding-bottom: 8px;padding-top: 8px;">
                <h4 style="text-align: center;color:black;">
                Empresa Solicitante
                </h4>
                <form class="form-horizontal form-control" style="width:500px;height:705px;margin:0 auto">
                Nombre del Solicitante:
                <br>
                <input class="form-control" type="text" name="" id="primero" />
                Tipo de Solicitante:
                <br>
                <select class="form-control">
                <option value="volvo">Persona Juridica</option>
                <option value="saab">Persona Natural</option>
                </select>
                RUC del Solicitante:
                <br>
                <input class="form-control" type="text" name="" id="primero" />
                Direccion del Solicitante:
                <br>
                <input class="form-control" type="text" name="" id="primero" />
                Telefono del Solicitante:
                <input class="form-control" type="text" name="" id="primero" />
                Email del Solicitante:
                <input class="form-control" type="text" name="" id="primero" />
                Nombre del Departamento:
                <br>
                <select class="form-control">
                    <option value="volvo">2020</option>
                    <option value="saab">2019</option>
                </select>
                Nombre de la Provincia:
                <br>
                <select class="form-control">
                    <option value="volvo">2020</option>
                    <option value="saab">2019</option>
                </select>
                Nombre del Distrito:
                <br>
                <select class="form-control">
                    <option value="volvo">2020</option>
                    <option value="saab">2019</option>
                </select>
                <br>
        </form>
            </div>

            <div class="col-sm-6 border" style="padding-bottom: 8px;padding-top: 8px;">
                <h4 style="text-align: center;color:black;">Representante de la Empresa Solicitante</h4>
                <form class="form-horizontal form-control" style="width:500px;height:705px;margin:0 auto">
                Nombre del Contacto:
                <br>
                <input class="form-control" type="text" name="" id="primero" />
                Correo Electronico del Contacto:
                <br>
                <input class="form-control" type="text" name="" id="primero" />
                Celular del Contacto:
                <br>
                <input class="form-control" type="text" name="" id="primero" />
                <br>
                </form>
            </div>
        </div>

        <br>
        <br>

        <div class="container">
        <h4 style="text-align:center;text-decoration: underline;color:black;">Cursos que forman parte de la Cotizacion</h4>
        <br>
        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#mimodalcurso" id="boton_modal" style="border-radius:5px;">
        Nuevo Curso a Cotizar
        </button>
        <br>
        <br>
        <table class="table table-bordered">
            <tr>
                <th class="text-center">Identificador</th>
                <th class="text-center">Nombre del Curso</th>
                <th class="text-center">Descripcion del Curso</th>
                <th class="text-center">Cantidad de Inscritos</th>
                <th class="text-center">Acciones</th>
            </tr>
            <tr>
                <td class="text-center">1</td>
                <td class="text-center">Circuitos Electricos</td>
                <td class="text-center">Descripcion de Circuitos Electricos...</td>
                <td class="text-center">5</td>
                <td class="text-center">
                    <a class="btn btn-warning btn-sm" href="" style="border-radius:5px;">Editar</a>
                    <a class="btn btn-danger btn-sm" href="" style="border-radius:5px;">Eliminar</a>
                </td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td class="text-center">Dispositivos Electronico</td>
                <td class="text-center">Descripcion de Dispositivos Electronicos...</td>
                <td class="text-center">10</td>
                <td class="text-center">
                    <a class="btn btn-warning btn-sm" href="" style="border-radius:5px;">Editar</a>
                    <a class="btn btn-danger btn-sm" href="" style="border-radius:5px;">Eliminar</a>
                </td>
            </tr>
        </table>
        </div>

        <div class="container">
            <h4 style="text-align:center;color:black;">
            Ingresar los correos electrónicos a los que se les enviará la cotización en formato PDF
            </h4>
            <div class="row">

            <div class="col-sm-6" style="padding-bottom: 8px;padding-top:8px;">

                <form class="form-horizontal form-control" style="height:150px;margin-left:10px;margin-right:0px;">
                Correo #1:
                <br>
                <input class="form-control" type="text" name="" id="primero" />
                Correo #2:
                <br>
                <input class="form-control" type="text" name="" id="primero" />
                </form>
            </div>

<div class="col-sm-6" style="padding-bottom: 8px;;padding-top:8px;">

    <form class="form-horizontal form-control" style="height:150px;margin-left:0px;margin-right:0px">
        Correo #3:
        <br>
        <input class="form-control" type="text" name="" id="primero" />
        Correo #4:
        <br>
        <input class="form-control" type="text" name="" id="primero" />
    </form>
</div>


            </div>
        </div>

        <br>
        <button type="button" class="btn btn-info btn-lg float-left" data-toggle="modal" data-target="#mimodalequipo" id="boton_modal" style="margin-right:110px;margin-left:120px;border-radius:5px;">
        Vista Preliminar
        </button>
        <br>
        <br>
        <br>
        <div>
            <center>
            <button type="button" class="btn btn-outline-success btn-lg edward" data-toggle="modal" data-target="#" id="boton_modal" style="width:40%;font-size:45px;height:60px;text-transform: capitalize;">
            Solicitar Cotización
            </button>
            </center>
        </div>

        <!-- Inicio de los formularios modales nuevo curso -->
        <div class="modal fade" id="mimodalcurso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">

        <!-- formulario -->
        <div class="container">
        <h1 style="text-align: center;color:black;font-size:40px;">Agregar Cursos a la Cotizacion</h1>
        <hr>
        <form class="form-horizontal form-control" style="width:450px;height:650px;margin:0 auto">
        Nombre del Curso:
        <select class="form-control">
            <option value="volvo">Circuitos Electricos</option>
            <option value="saab">Sistemas de Potencia</option>
            <option value="saab">Otro Curso</option>
        </select>
        <br>
        Cantidad de Estudiantes:
        <input class="form-control" type="text" name="" id="primero" />
        <br>
        Detallar curso a cotizar: (Solo si el curso no esta en la lista)<br>
        <textarea class="form-control" name="message"></textarea><br>
        Indique el horario tentativo para el dictado del curso:<br>
        <textarea class="form-control" name="message"></textarea><br>
        Lugar de Capacitación:
        <br>
        <select class="form-control">
            <option value="volvo">Oficinas de la Empresa</option>
            <option value="saab">Laboratorio de Electricidad</option>
            <option value="saab">Cualquiera de las dos opciones</option>
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

        <!-- Fin del formulario de cotizaciones de capacitacion -->
        <br>
        <br>
        <br>
        <br>

@endsection
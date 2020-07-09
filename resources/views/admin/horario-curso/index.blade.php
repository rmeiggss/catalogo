<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/css/bootstrap.css') }}">
	<script src="{{ asset('js/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('js/js/bootstrap.js') }}"></script>
	<script>
	$(document).ready(function() {
  	$("#boton_modal").click(function() {
    $('#mimodaltema').on('shown.bs.modal', function() {
      $('#primero').focus();
    })
  	});
	});
	</script>
	<title></title>
</head>
<body>
<div class="container">
<h1>Listado de Horarios para la Capacitacion en los Cursos</h1>
<a href="{{ route('curso.index') }}">Ventana Principal</a>
<hr>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#mimodaltema" id="boton_modal">
Nuevo Horario para la Capacitacion en los Cursos
</button>
<br>
<br>
<table class="table table-bordered">
	<tr>
		<th class="text-center">Identificador</th>
		<th class="text-center">Nombre del Curso</th>
		<th class="text-center">Semana del Mes Laborable</th>
		<th class="text-center">Dia Laborable</th>
		<th class="text-center">Hora Inicial</th>
		<th class="text-center">Hora Final</th>
		<th class="text-center">Acciones</th>
	</tr>
	<tr>
		<td class="text-center">1</td>
		<td class="text-center">Sistema de Puesta a Tierra</td>
		<td class="text-center">Semana 1</td>
		<td class="text-center">Martes</td>
		<td class="text-center">19</td>
		<td class="text-center">22</td>
		<td class="text-center">
			<a class="btn btn-warning btn-sm" href="">Editar</a>
			<a class="btn btn-danger btn-sm" href="">Eliminar</a>
		</td>
	</tr>
	<tr>
		<td class="text-center">2</td>
		<td class="text-center">Sistemas de Potencia</td>
		<td class="text-center">Semana 2</td>
		<td class="text-center">Viernes</td>
		<td class="text-center">19</td>
		<td class="text-center">22</td>
		<td class="text-center">
			<a class="btn btn-warning btn-sm" href="">Editar</a>
			<a class="btn btn-danger btn-sm" href="">Eliminar</a>
		</td>
	</tr>
</table>
</div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="mimodaltema" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">

		<!-- formulario -->
		<div class="container">
		<h1 style="text-align: center">Agregar Mes Laborable</h1>
		<hr>
		<form class="form-horizontal form-control" style="width:400px;height:500px;margin:0 auto">
		Semana del Mes Laborable:
		<br>
		<select class="form-control">
  			<option value="volvo">Semana 1</option>
  			<option value="saab">Semana 2</option>
		</select>
		<br>
		Nombre del Dia Laborable:
		<br>
		<select class="form-control">
  			<option value="volvo">Lunes</option>
  			<option value="saab">Martes</option>
		</select>
		<br>
		Nombre del Curso:
		<br>
		<select class="form-control">
  			<option value="volvo">Circuitos Electricos</option>
  			<option value="saab">Sistema de Potencia</option>
		</select>
		<br>
		Hora Inicial:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		<br>
		Hora Final:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
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


</body>
</html>
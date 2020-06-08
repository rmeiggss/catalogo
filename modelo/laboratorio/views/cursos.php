<?php 
include_once 'session.php';
include_once 'model/CLCursos.php';
$modelcursos = new Cursos();
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cursos</title>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/lib-resources.js"></script>
    <script src="assets/js/cursos-crud.js"></script>    
</head>
<body>
    <?php include 'menu.php'; ?>
	<div class="container">
            <h2>Cursos</h2>
                    <!-- The Modal para guardar cursos -->
                    <div id="myModalReg" class="modal">
                        <!-- Modal content of Savw -->
                        <div class="modal-content">
                            <span class="close">&times;</span>					
                            <div class="col-md-12">
                                <form id="form-Registrar" method="post">
                                    <h2 class="text-center" id="form-Titulo">Nuevo Curso</h2>
                                    <div id="myProgress">
                                      <div id="myBar">0%</div>
                                    </div>
                                    <div class="alert alert-success">
                                        <strong>Success!</strong> Indicates a successful or positive action.
                                    </div>                                     
                                    <div class="form-group">
                                        <label for="nomcurso">Nombre del Curso</label>
                                        <input type="text" class="form-control" id="nomcurso" name="nomcurso" >
                                    </div>
                                    <div class="form-group">
                                        <label for="descurso">Descripción del Curso</label>
                                        <textarea class="form-control" rows="5" id="descurso" name="descurso"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomcurso">Fecha de Inicio Curso</label>
                                        <input type="date" class="form-control" id="fechacurso" name="fechacurso" >
                                    </div>
                                    <div class="form-group">
                                        <label for="nomcurso">Estado del Curso</label>
                                        <select class="form-control selectpicker" id="estadocurso" name="estadocurso">
                                            <option value="Disponible">Disponible</option>
                                            <option value="No Disponible">No Disponible</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomcurso">Descuentos del Curso</label>
                                        <select class="form-control selectpicker" id="descuentoscurso" name="descuentoscurso">
                                            <option value="Aplicable">Aplicable</option>
                                            <option value="No Aplicable">No Aplicable</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomcurso">Costo del Curso</label>
                                        <input type="text" class="form-control" id="costocurso" name="costocurso" >
                                    </div>
                                    <button id="btnReg" type="submit" class="btn btn-primary">Registrar</button>
                                    <input type="hidden" class="form-control" id="a" name="a">
                                </form>                          
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10"></div>
                    <div class="col-md-2 lead"><button id="btnSave" class="btn btn-success pull-right navbar-btn">Nuevo++</button></div>
<!--conten de modal para editar cursos-->
                    <div id="myModalEdit" class="modal">
                            <!-- Modal content of EDIT -->
                            <div class="modal-content">
                                    <span class="close">&times;</span>					
                                    <div class="col-md-12">
                                            <form id="form-Editar" method="post">
                                                            <h2 class="text-center">Editar Curso</h2>
                                                    <div class="alert alert-success">
                                                            <strong>Success!</strong> Indicates a successful or positive action.
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="codcurso">Codigo del Curso</label>
                                                        <input type="text" class="form-control" id="codcurso-edit" name="codcurso-edit" readonly="readonly">
                                                    </div> 
                                                    <div class="form-group">
                                                            <label for="nomcurso">Nombre del Curso</label>
                                                            <input type="text" class="form-control" id="nomcurso-edit" name="nomcurso-edit" >
                                                    </div>
                                                    <div class="form-group">
                                                            <label for="descurso">Descripción del Curso</label>
                                                            <textarea class="form-control" rows="5" id="descurso-edit" name="descurso-edit"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                            <label for="nomcurso">Fecha de Inicio Curso</label>
                                                            <input type="date" class="form-control" id="fechacurso-edit" name="fechacurso-edit" >
                                                    </div>
                                                    <div class="form-group">
                                                            <label for="nomcurso">Estado del Curso</label>
                                                                    <select class="form-control selectpicker" id="estadocurso-edit" name="estadocurso-edit">
                                                                    <option value="Disponible">Disponible</option>
                                                                    <option value="No Disponible">No Disponible</option>
                                                                    </select>
                                                    </div>
                                                    <div class="form-group">
                                                            <label for="nomcurso">Descuentos del Curso</label>
                                                            <select class="form-control selectpicker" id="descuentoscurso-edit" name="descuentoscurso-edit">
                                                                    <option value="Aplicable">Aplicable</option>
                                                                    <option value="No Aplicable">No Aplicable</option>
                                                    </select>
                                                    </div>
                                                    <div class="form-group">
                                                            <label for="nomcurso">Costo del Curso</label>
                                                            <input type="text" class="form-control" id="costocurso-edit" name="costocurso-edit" >
                                                    </div>

                                                    <button id="btnEdit" type="submit" class="btn btn-primary">Editar</button>
                                            </form>                          
                                    </div>
                            </div>

                    </div>                    
                    <div class="row">
			<div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre del Curso</th>
                                        <th>Descripción del Curso</th>
                                        <th>Fecha de Inicio del Curso</th>
                                        <th>Estado del Curso</th>
                                        <th>Descuento del Curso</th>
                                        <th>Costo del Curso</th>
                                        <th>Estado</th>
                                        <th colspan="2" style="text-align:center;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="userData">
                                    <?php foreach ($modelcursos->Listar() as $key):?>
                                    <tr>
                                        <td><?php echo $key->ID_Curso; ?></td>
                                        <td class="nombrecur"><?php echo $key->Nombre_Curso; ?></td>
                                        <td class="descur"><?php echo $key->Descripcion_Curso; ?></td>
                                        <td class="fcreacion"><?php echo $key->Fecha_Inicio_Dictado; ?></td>
                                        <td class="factualizacion"><?php echo $key->Estado_Curso; ?></td>
                                        <td class="estado"><?php echo $key->Descuento_Curso; ?></td>
                                        <td class="estado"><?php echo $key->Costo_del_Curso; ?></td>
                                        <td><button class=" btn btn-info editar" data-id="<?php echo $key->ID_Curso; ?>">Editar</button></td>
                                        <td><button class="btn btn-danger eliminar" data-id="<?php echo $key->ID_Curso; ?>">x</button></td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>              
			</div>
                    </div>
	</div>
</body>
</html>
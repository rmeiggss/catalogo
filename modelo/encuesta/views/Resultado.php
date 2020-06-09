<?php 
//include_once '../model/CLEncuesta.php';
//$modelencuesta = new Encuesta();
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Resultados de la Encuesta</title>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jspdf/jspdf.js"></script>  
    <script src="js/jspdf/jspdf.plugin.addimage.js"></script>
    <script src="js/jspdf/jspdf.plugin.standard_fonts_metrics.js"></script>
    <script src="js/jspdf/jspdf.plugin.split_text_to_size.js"></script>
    <script src="js/jspdf/jspdf.plugin.from_html.js"></script>
    <script src="js/lib-resources.js"></script>
    <script src="js/resultado-crud.js"></script>    
</head>
<body>
    <!--incluye el archivo php que es el menu del aplicativo web--> 
	<div class="container-fluid">
        <h1 style="text-align: center;font-size: 75px;">Encuestas Llenas</h1>
        <br>
        <div class="col-md-10"></div>
        <div class="modal" id="myModalEdit">
            <div class="modal-content">
                <span class="close">&times;</span>  
                <center><iframe frameborder="0" width="70%" height="600"></iframe></center>
            </div>
        </div>        
        <div class="row">
			<div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nombre del Encuestado</th>
                            <th class="text-center">Descripcion_Cargo</th>
                            <th class="text-center">Acción</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <!--listo todos los curso de la base de datos--> 
                        <?php foreach ($modelencuesta->Listar() as $key):?>
                        <tr>
                            <td class="text-center"><?php echo $key->ID_Encuesta; ?></td>
                            <td class="text-center"><?php echo $key->Nombre; ?></td>
                            <td class=""><?php echo  substr($key->Descripcion_Cargo, 0,85); ?>...</td>
                            <td>
                            <center>
                            <a id="btnImprimir" href="#" class="btn-sm btn-info editar" data-id="<?php echo $key->ID_Encuesta; ?>">Imprimir Reporte
                            </a>
                            </center>
                            </td>
                        <?php endforeach ?>
                    </tbody>
                </table>              
			</div>
        </div>
	</div>
	<script type="text/javascript" src="../js/resultado-crud.js"></script>
</body>
</html>
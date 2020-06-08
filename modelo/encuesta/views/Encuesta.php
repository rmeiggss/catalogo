<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Encuesta</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<style>
		body {
  				background-color: lightblue;
			}

		h1 {
  				color: black;
  				text-align: center;
  				
  				font-size: 75px;
  				text-decoration: underline;
			}

		p {
  				font-family: verdana;
  				font-size: 20px;
			}
		#numero {
  				
			}
		#pregunta {
  				font-size: 26px;
			}
		.btn-dec:hover{
                color: #0275d8 !important;
                background-color: white !important;
                font-weight: bold;
            }	
</style>
</head>
<body>
<div class="container">
<h1 style="text-align: center">Encuesta</h1>
<hr>
<form id="form-Registrar" method="post" class="form-horizontal form-control bordered" style="width:720px;height:9990px;margin:0 auto">

		<div>Nombre y Apellidos:</div>
		<input class="form-control" type="text" name="nombre" id="nombre" focus>
		<br>
		<div>Descricpion del Cargo:</div>
		<textarea name="cargo" id="cargo" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>
		<div id="numero">Pregunta 1:</div>
		<div id="pregunta">¿Qué es un producto software de valor?</div>
		<br>
		<textarea name="preg1" id="preg1" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>
		
		<div id="numero">Pregunta 2:</div>
		<div id="pregunta">¿Cuándo una empresa peruana de software ha logrado un producto software de valor?</div>
		<br>
		<textarea name="preg2" id="preg2" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>
		
		<div id="numero">Pregunta 3:</div>
		<div id="pregunta">¿Es fácil generar un producto software de valor en el mercado peruano?, justifique su respuesta.</div>
		<br>
		<textarea name="preg3" id="preg3" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>
		
		<div id="numero">Pregunta 4:</div>
		<div id="pregunta">¿Cuáles son los objetivos de un proyecto de software peruano?</div>
		<br>
		<textarea name="preg4" id="preg4" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>
		
		<div id="numero">Pregunta 5:</div>
		<div id="pregunta">¿Estos objetivos son los más adecuados para un proyecto de software según su experiencia o debería haber otros?, justifique su respuesta.</div>
		<br>
		<textarea name="preg5" id="preg5" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>
		
		<div id="numero">Pregunta 6:</div>
		<div id="pregunta">¿Priorice cuáles son los objetivos más importantes y menos importantes en un proyecto de software peruano?</div>
		<br>
		<textarea name="preg6" id="preg6" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>
		
		<div id="numero">Pregunta 7:</div>
		<div id="pregunta">¿En la industria de software nacional cuando un proyecto de software ha sido exitoso?</div>
		<br>
		<textarea name="preg7" id="preg7" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>
		
		<div id="numero">Pregunta 8:</div>
		<div id="pregunta">¿Cuáles son las diferencias entre un proyecto de software para el sector público y uno para el sector privado?</div>
		<br>
		<textarea name="preg8" id="preg8" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>
		
		<div id="numero">Pregunta 9:</div>
		<div id="pregunta">¿Cuáles son las características que priman en un proyecto de software para el sector público?</div>
		<br>
		<textarea name="preg9" id="preg9" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>
		
		<div id="numero">Pregunta 10:</div>
		<div id="pregunta">¿Cuáles son las características que priman en un proyecto de software para el sector privado?</div>
		<br>
		<textarea name="preg10" id="preg10" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 11:</div>
		<div id="pregunta">¿Qué tipo de proyecto de software es más rentable para una empresa, uno del sector público o uno del sector privado?, justifique su respuesta.</div>
		<br>
		<textarea name="preg11" id="preg11" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 12:</div>
		<div id="pregunta">¿En qué puntos usted asignaría más recursos cuando se elabora un producto software para el sector público?, justifique su respuesta.</div>
		<br>
		<textarea name="preg12" id="preg12" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 13:</div>
		<div id="pregunta">¿En qué puntos usted asignaría más recursos cuando se elabora un producto software para el sector privado?, justifique su respuesta.</div>
		<br>
		<textarea name="preg13" id="preg13" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 14:</div>
		<div id="pregunta">¿De los enfoques que existen en la actualidad para gestionar un proyecto de software nacional cual considera usted que es el más idóneo en la actualidad?, justifique su respuesta.</div>
		<br>
		<textarea name="preg14" id="preg14" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 15:</div>
		<div id="pregunta">¿Qué es lo más recomendable referente al método para gestionar un proyecto de software usar un enfoque al detalle o realizar una combinación de los enfoques más apropiados?</div>
		<br>
		<textarea name="preg15" id="preg15" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 16:</div>
		<div id="pregunta">¿Qué metodología usted recomienda para que en un proyecto de software se genere un producto de valor?, y que es valor para usted.</div>
		<br>
		<textarea name="preg16" id="preg16" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 17:</div>
		<div id="pregunta">¿Qué es un software para una empresa de software peruana?</div>
		<br>
		<textarea name="preg17" id="preg17" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 18:</div>
		<div id="pregunta">¿Cuáles son las ventajas de usar el enfoque PMI (Project Management Institute) en un proyecto de software nacional?, justifique su respuesta. </div>
		<br>
		<textarea name="preg18" id="preg18" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 19:</div>
		<div id="pregunta">¿Cuáles son las desventajas de usar el enfoque PMI (Project Management Institute) en un proyecto de software nacional?, justifique su respuesta. </div>
		<br>
		<textarea name="preg19" id="preg19" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 20:</div>
		<div id="pregunta">¿Cuáles son las ventajas de usar un enfoque ágil en un proyecto de software nacional?, justifique su respuesta. </div>
		<br>
		<textarea name="preg20" id="preg20" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 21:</div>
		<div id="pregunta">¿Cuáles son las desventajas de usar un enfoque ágil en un proyecto de software nacional?, justifique su respuesta. </div>
		<br>
		<textarea name="preg21" id="preg21" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 22:</div>
		<div id="pregunta">¿Cuál es el problema más complejo en un proyecto de software en las pymes peruanas?, justifique su respuesta.</div>
		<br>
		<textarea name="preg22" id="preg22" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 23:</div>
		<div id="pregunta">¿Cuál es el problema más simple en un proyecto de software en las pymes peruanas?, justifique su respuesta.</div>
		<br>
		<textarea name="preg23" id="preg23" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 24:</div>
		<div id="pregunta">Bajo que resultados de un proyecto de software usted indicaría que el producto software tiene valor.</div>
		<br>
		<textarea name="preg24" id="preg24" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 25:</div>
		<div id="pregunta">Bajo que resultados de un proyecto de software usted indicaría que el producto software no tiene valor.</div>
		<br>
		<textarea name="preg25" id="preg25" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 26:</div>
		<div id="pregunta">Las pymes de software nacional tienen un alto nivel de competitividad con respecto a la región.</div>
		<br>
		<textarea name="preg26" id="preg26" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 27:</div>
		<div id="pregunta">Como podría mejorar la competitividad a nivel regional de las pymes peruanas que elaboran productos de software.</div>
		<br>
		<textarea name="preg27" id="preg27" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 28:</div>
		<div id="pregunta">La industria nacional de software es un factor importante para el crecimiento económico nacional.</div>
		<br>
		<textarea name="preg28" id="preg28" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>

		<div id="numero">Pregunta 29:</div>
		<div id="pregunta">Cuáles son los factores de la industria de software de otros países que afectan a la productividad de la industria de software nacional. </div>
		<br>
		<textarea name="preg29" id="preg29" style="resize: none;font-size: 18px;" class="form-control" name="" rows="5" cols="5"></textarea>
		<br>
		<center>
		<input style="width:60%;font-weight: bold;" class="btn btn-primary btn-lg btn-dec" type="submit" name="" value="Guardar Encuesta" />
		</center>
		<br>
		<br>
		</form>
</div>
<script type="text/javascript" src="js/encuesta-crud.js"></script>
</body>
</html>
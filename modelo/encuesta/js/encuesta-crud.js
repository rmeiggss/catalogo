$(document).ready(function () {

	RegistrarCurso();
	EliminarCurso();
	ObtenerCurso();
	//openModal("#btnSave","#myModalReg");
	//closeModal("#myModalReg");
	//openModal(".editar","#myModalEdit");
	//closeModal("#myModalEdit");
	EditarCurso();
	//Esta es una variable global que se utilizará para obtener el id del curso obtenido en la funcio ObtenerCurso en .js
	var id_recuper=0;
});


function RegistrarCurso() {

	$("#form-Registrar").validate({
        rules: {
            //nomcurso: {required: true,minlength:2},
            //descurso: {required: true, minlength:10},
            //estado: {required:true}

        },
        messages: {
            //nomcurso: {required: "Este campo es obligatorio",minlength:"Por favor introdusca más de 2 caracteres"},
            //descurso: {required: "Este campo es obligatorio",minlength:"Por favor introdusca más de 10 caracteres"},
            //estado: {required: "Este campo es obligatorio"}

        },
        submitHandler: function() {
        	/*3)
        	var nomcurso = $("#nomcurso").val();
			var descurso = $("#descurso").val();
			var estado = $('input:radio[name=estado]:checked').val();
			*/

			/*1) Aqui estoy cogiendo queeeeeee?? que te coga dices?? ajajaajajaaj
			nada les decia que aqui estoy cogiendo todos los campos del formulario que lleva como
			id="#form-Registrar" y en el php ponemos como parametro el campo name del formulario
			entonces ya no seria necesario enviar con data.append() por lo que pasaremos a comentarlo
			y a su vez tambie vamos a comentar lo de arriba que capturamos todos los campos con var ...
			*/
			var data = new FormData($("#form-Registrar")[0]);

			/*2)comentamos esto
			data.append("nomcurso", nomcurso);
			data.append("descurso", descurso);
			data.append("estado", estado);*/

        	$.ajax({
        		url: "?c=Encuesta&a=RegistrarEncuesta",
				type: "POST",
				data: data,
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function () {
					//hacemos visible el progreesbar
					//$("#myProgress").show();
	                //var elem = document.getElementById("myBar");   
					//	  var width = 0;
					//	  var id = setInterval(frame, 10);
					//	  function frame() {
					//	    if (width >= 100) {
					//	      clearInterval(id);
					//	    } else {
					//	      width++; 
					//	      elem.style.width = width + '%'; 
					//	      elem.innerHTML = width * 1  + '%';
					//	    }
					//	  }
	            },
	            //una vez finalizado correctamente
	            success: function (data) {
	                //message = $("<span class='success'>La imagen ha subido correctamente " + data + ".</span>");
	                //setTimeout("location.reload();",1000);
	                //LimpiarCampos("#form-Registrar");
	                //showMessage(data);
	                //LanzarCurso();
	                alert("Encuesta Grabada");
	                location.href="?c=Encuesta&a=salida";

	            },
	            //si ha ocurrido un error
	            error: function (data) {
	                //message = $("<span class='error'>Ha ocurrido un error.</span>");
	                //showMessage("Ocurrio un error inesperado... " + data);
	            }
        	});
        	return false;
    	}
    });

}

function EliminarCurso() {

    $(".eliminar").click(function () {
        var confirma = confirm("Desea eliminar?");
        if (confirma) {
        	$(this).parent('td').parent('tr').remove();
            var id = $(this).attr('data-id');
            var dataString = {'id_curso': id};
            $.ajax({
	            type: "POST",
	            url: "?c=Cursos&a=EliminarCurso",
	            data: dataString,
	            success: function(data) {            
	                alert(data);
	                location.href="?c=Cursos&a=index";
	            },
	            error: function (data) {
	                alert("Ocurrio un error inesperado... " + data);
	            }
        	});
        } else {
            return false;
        }
    });

}


function ObtenerCurso(){
	$(".editar").click(function () {
		var id = $(this).attr('data-id');
		$.ajax({
			url: "?c=Cursos&a=ObtenerCurso",
			type: 'POST',
			data: {'id_curso':id},
			success:function (data) {
				var myObj = JSON.parse(data);
				$("#nomcurso-edit").val(myObj.nombre_curso);
				$("#descurso-edit").val(myObj.descripcion_curso);
				$("input:radio[name=estado-edit]").filter("[value="+ myObj.flag_estado +"]").prop('checked',true);
				id_recuper = id;
			},
			error:function (data) {
				alert("Ocurrio un error inesperado... " + data);
			}
		});
	});
}

function EditarCurso(){
	$("#btnEdit").click(function(e){
		e.preventDefault();

		var nomcurso = $("#nomcurso-edit").val();
		var descurso = $("#descurso-edit").val();
		var estado = $('input:radio[name=estado-edit]:checked').val();

		var data = new FormData();
		data.append("nomcurso-edit", nomcurso);
		data.append("descurso-edit", descurso);
		data.append("estado-edit", estado);
		data.append("id_curso", id_recuper);


		var dataString = 'nomcurso=' + nomcurso + '&descurso=' + descurso;
		$.ajax({
			url: "?c=Cursos&a=EditarCurso",
			type: "POST",
			data: data,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function () {
                //message = $("<span class='before'>Subiendo la imagen, por favor espere...</span>");
                showMessage("Cargando a la Base de datos");            },
            //una vez finalizado correctamente
            success: function (data) {
                //message = $("<span class='success'>La imagen ha subido correctamente " + data + ".</span>");
                //setTimeout("location.reload();",1000);
                LimpiarCampos("#form-Editar");
                showMessage(data);
                location.href="?c=Cursos&a=index";
            },
            //si ha ocurrido un error
            error: function (data) {
                //message = $("<span class='error'>Ha ocurrido un error.</span>");
                showMessage("Ocurrio un error inesperado " + data);
            }

		});
	});
}
function LanzarCurso(){
	$.ajax({
		url: "?c=Cursos&a=ObtenerCurso",
		type: "POST",
		data: "action_type=view",
		success: function (data) {
			$("#userData").html(data).show();
		}
	});
}
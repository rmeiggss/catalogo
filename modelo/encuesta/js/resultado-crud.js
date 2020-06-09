$(document).ready(function () {
	ImprimirReporte();
    openModal(".editar","#myModalEdit");
    closeModal("#myModalEdit");
});	

function ImprimirReporte(){
    $(".editar").click(function () {
		var id = $(this).attr('data-id');
        var datos = new FormData();
        datos.append("id_encuesta",id);
        $.ajax({
            url:"?c=Encuesta&a=ObtenerEncuesta",
            method:"post",
            data:datos,
            dataType:"json",
            contentType:false,
            processData:false,
            success:function(data){
                var doc = new jsPDF();        
                doc.setFontSize(20);
                doc.text(50, 20, "RESULTADOS DE LA ENCUESTA");
                doc.setFontSize(15);
                doc.text(30,40,"Nombre del Encuestado: "+data.Nombre);
                doc.text(30,50,"Cargo: "+data.Descripcion_Cargo);
                doc.text(30,60,"Pregunta 1: "+data.Pregunta1);
                doc.text(30,70,"Pregunta 2: "+data.Pregunta2);
                doc.text(30,80,"Pregunta 3: "+data.Pregunta3);
                doc.text(30,90,"Pregunta 4: "+data.Pregunta4);
                doc.text(30,100,"Pregunta 5: "+data.Pregunta5);
                doc.text(30,110,"Pregunta 6: "+data.Pregunta6);
                doc.text(30,120,"Pregunta 7: "+data.Pregunta7);
                doc.text(30,130,"Pregunta 8: "+data.Pregunta8);
                doc.text(30,140,"Pregunta 9: "+data.Pregunta9);
                doc.text(30,150,"Pregunta 10: "+data.Pregunta10);
                doc.text(30,160,"Pregunta 11: "+data.Pregunta11);
                doc.text(30,170,"Pregunta 12: "+data.Pregunta12);
                doc.text(30,180,"Pregunta 13: "+data.Pregunta13);
                doc.text(30,190,"Pregunta 14: "+data.Pregunta14);
                doc.text(30,200,"Pregunta 15: "+data.Pregunta15);
                doc.text(30,210,"Pregunta 16: "+data.Pregunta16);
                doc.text(30,220,"Pregunta 17: "+data.Pregunta17);
                doc.text(30,230,"Pregunta 18: "+data.Pregunta18);
                doc.text(30,240,"Pregunta 19: "+data.Pregunta19);                                
                doc.text(30,250,"Pregunta 20: "+data.Pregunta20);  
                doc.text(30,260,"Pregunta 21: "+data.Pregunta21);  
                doc.addPage('a4','p');     
                doc.text(30,40,"Pregunta 22: "+data.Pregunta22);
                doc.text(30,50,"Pregunta 23: "+data.Pregunta23);
                doc.text(30,60,"Pregunta 24: "+data.Pregunta24);
                doc.text(30,70,"Pregunta 25: "+data.Pregunta25);
                doc.text(30,80,"Pregunta 26: "+data.Pregunta26);
                doc.text(30,90,"Pregunta 27: "+data.Pregunta27);
                doc.text(30,100,"Pregunta 28: "+data.Pregunta28);
                doc.text(30,110,"Pregunta 29: "+data.Pregunta29);                                                   
                var string = doc.output('datauristring');
                $('iframe').attr('src', string);
            },
            error:function(){
                alert("Ocurrió un error");
            }
        });
    });
}
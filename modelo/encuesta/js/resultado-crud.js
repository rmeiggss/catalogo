$(document).ready(function () {


	ImprimirReporte();
});	

function ImprimirReporte(){
    $("#btnImprimir").click(function () {
    	var id = $(this).attr('data-id');
    	var dataString = {'ID_Encuesta': id};
    	var url = "?c=Encuesta&a=ImprimirReporte";
    	//$("#form-Editar").attr("action",url);
		//$("#form-Editar").attr("target","rptCursos");        
        window.open(url,"rptCursos","width=800,height=500,top=200,left=200");
        $("#form-Editar").submit();
    });
}
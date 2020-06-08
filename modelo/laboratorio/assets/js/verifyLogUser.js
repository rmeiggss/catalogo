$(document).ready(function () {
    AccesoAlumno();
    
});

function AccesoAlumno(){
    $("#submit").click(function(e){
        e.preventDefault();
        var datos = new FormData($("#frm_login")[0]);
        $.ajax({
            url: "?c=Usuarios&a=AccesoUsuarios",
            type: "POST",
            data: datos,
            dataType:"json",
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                LimpiarCampos("#frm_login");
                if (data.flag == 0) {
                    alert(data.msje);
                }
                if (data.flag == 1) {
                    location.href= data.url;
                }
            },
            error: function (data) {
                showMessage("Ocurrio un error inesperado " + data);
            }
        });
    });
}
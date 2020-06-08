$(document).ready(function () {
    RegistrarCurso();
    EliminarCurso();
    ObtenerCurso();
    openModal("#btnSave","#myModalReg");
    closeModal("#myModalReg");
    openModal(".editar","#myModalEdit");
    closeModal("#myModalEdit");
    EditarCurso();
});

function RegistrarCurso() {
    $("#form-Registrar").submit(function(){
        var form = $("#form-Registrar")[0];
        var datos = new FormData(form);   
        datos.append("c","Cursos");
        datos.append("a","RegistrarCurso");
        $.ajax({
            url: "index.php",
            type: "POST",
            data: datos,
            dataType:"json",
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                LimpiarCampos("#form-Registrar");
                if(data){
                    showMessage("Se agrego un registro");
                    location.href="?c=Cursos&a=index";                    
                }
            },
            error: function (data) {
                showMessage("Ocurrio un error inesperado... " + data);
            }
        });
        return false;
    });
}

function EliminarCurso() {
    $(".eliminar").click(function () {
        if (confirm("Desea eliminar?")) {
            var id = $(this).attr('data-id');
            var datos = new FormData();
            datos.append("c","Cursos");
            datos.append("a","EliminarCurso");
            datos.append("id_curso",id);
            $.ajax({
                type : "POST",
                url  : "index.php",
                data : datos,
                dataType:"json",
                contentType:false,
                processData:false,
                success: function(data) {            
                    if(data){
                        location.href="?c=Cursos&a=index";    
                    }
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
        $("#btnReg").html("Editar");
        $("#form-Titulo").html("Editar Curso");
        var id = $(this).attr('data-id');
        var datos = new FormData();
        datos.append("c","Cursos");
        datos.append("a","ObtenerCurso");
        datos.append("id_curso",id);
        $.ajax({
            url: "index.php",
            type: "POST",
            data: datos,
            contentType:false,
            processData:false,
            dataType:"json",
            success:function(data) {
                $("#codcurso-edit").val(data.ID_Curso);
                $("#nomcurso-edit").val(data.Nombre_Curso);
                $("#descurso-edit").val(data.Descripcion_Curso);
                $("#fechacurso-edit").val(data.Fecha_Inicio_Dictado);
                $("#estadocurso-edit").val(data.Estado_Curso);
                $("#descuentoscurso-edit").val(data.Descuento_Curso);
                $("#costocurso-edit").val(data.Costo_del_Curso);
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
        var form = $("#form-Editar")[0];
        var datos = new FormData(form);
        datos.append("c","Cursos");
        datos.append("a","EditarCurso");
        $.ajax({
            url: "index.php",
            type: "POST",
            data: datos,
            dataType:"json",
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                LimpiarCampos("#form-Registrar");
                if(data){
                    location.href="?c=Cursos&a=index";                    
                }
            },
            error: function (data) {
                showMessage("Ocurrio un error inesperado " + data);
            }
        });
        return false;
    });
}
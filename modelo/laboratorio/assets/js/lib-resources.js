function openModal(controlador,modal) {
    $(controlador).click(function () {
        $(modal).css('display','block');
        $("#myProgress").hide();
        $(".alert-success").hide();
        //.css('fontSize', '100px');
    });
}

function closeModal(modal) {
    $(".close").click(function () {
        $(modal).css('display','none');
    });
}
function LimpiarCampos(formulario) {
    $(formulario)[0].reset();
}

function showMessage(msje){
    $(".alert-success").html(msje).show();
}
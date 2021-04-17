var emailRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; // Expresión regular de email
$('#txt-emails-envio-cotizacion').tagsInput({
    width: 'auto',
    pattern: emailRegex,
    defaultText: 'Ingresar un email',
    'onAddTag': function (e) {
        let value = $('#txt-emails-envio-cotizacion').val();
        let emails = value.split(',');
        if (emails.length == 5) {
            $('#txt-emails-envio-cotizacion').removeTag(emails[emails.length - 1]);
            alert('no puede ingresar más de 4 correos electrónicos');
        }
    }
});

$('#ver-emails').on('click', function () {
    let value = $('#txt-emails-envio-cotizacion').val();
    let emails = value.split(',');
    let emailsCount = 0;
    $.each(emails, (i, email) => emailsCount += (email.trim() == '') ? 0 : 1);
    if (emailsCount == 0)
        alert('ingrese por le menos un email');
    else
        alert(emails);
});

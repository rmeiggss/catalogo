function anadir(){
    var url="editar_eventos.php?modo=a";
    abrirVentanaSecundaria(url,630,400);
}
function editar(id){
    var url="editar_eventos.php?id="+id+"&modo=m";
    abrirVentanaSecundaria(url,630,400);
}
function eliminar(id){
    var url="editar_eventos.php?id="+id+"&modo=e";
    alert('Aun no implementado');
}
function abrirVentanaSecundaria(url,ancho,alto){
    window.open(url,'','toolbars=no,resizables=no,menubars=no,width='+ancho+',height='+alto+';');
}



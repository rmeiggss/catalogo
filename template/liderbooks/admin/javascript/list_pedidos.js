function anadir(){
    var url="editar_pedidos.php?modo=a";
    abrirVentanaSecundaria(url,690,660);
}
function editar(id){
    var url="editar_pedidos.php?id="+id+"&modo=m";
    abrirVentanaSecundaria(url,690,660);
}
function eliminar(id){
    var url="editar_pedidos.php?id="+id+"&modo=e";
    alert('Aun no implementado');
}
function abrirVentanaSecundaria(url,ancho,alto){
    window.open(url,'','toolbars=no,resizables=no,menubars=no,width='+ancho+',height='+alto+';');
}



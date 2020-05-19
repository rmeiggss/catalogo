function muestra_pagina(archivo,pagina_activa){
    document.paginador.pagina_seleccionada.value=pagina_activa;
    document.paginador.bloque_seleccionado.value=parseInt(document.paginador.bloque_seleccionado.value);
    document.paginador.method="post";
    document.paginador.action=archivo;
    document.paginador.submit();
}
function siguiente(archivo,hojas_visibles){
    if(document.paginador.bloque_seleccionado.value!=document.paginador.bloque.value){
        document.paginador.pagina_seleccionada.value=(parseInt(document.paginador.bloque_seleccionado.value))*hojas_visibles;
        document.paginador.bloque_seleccionado.value=parseInt(document.paginador.bloque_seleccionado.value)+1;
        document.paginador.method="post";
        document.paginador.action=archivo;
        document.paginador.submit();
    }
}
function atras(archivo,hojas_visibles){
    if(document.paginador.bloque_seleccionado.value!=1){
        document.paginador.pagina_seleccionada.value=(parseInt(document.paginador.bloque_seleccionado.value)-2)*hojas_visibles+1;
        document.paginador.bloque_seleccionado.value=parseInt(document.paginador.bloque_seleccionado.value)-1;
        document.paginador.method="post";
        document.paginador.action=archivo;
        document.paginador.submit();
    }
}


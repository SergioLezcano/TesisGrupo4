function confirmar(e){
    if (confirm ("¿Esta seguro de eliminar este registro?")) {
        return true ;
    } else {
        e.preventDefault();
    }
}

let linkEliminar = document.querySelectorAll(".table_items_linkEliminar")

for(var i = 0; i < linkEliminar.length; i++){
    linkEliminar[i].addEventListener('click', confirmar)
}
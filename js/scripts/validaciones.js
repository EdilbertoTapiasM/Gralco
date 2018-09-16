function validarConsecutivos() {
    
    var inicio = document.getElementById("inicio").value;
    var fin = document.getElementById("fin").value;

    if(inicio > fin){
        alertify.error("Error - El concecutivo de Inicio no puede ser mayor que el consecutivo de Fin");
        return false;
    }
}
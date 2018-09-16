$(document).ready(function(){
    $('#tablaEmpleado').load('../../funciones/tablas.php');
    $('#tablaNovedades').load('../../funciones/tablas.php');


    $('#buscar').keyup(function(e){
        $('#tablaEmpleado').load({
            filtro:$('#buscar').val()
        });
    });
});

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gralco SA - Nomina - Novedades</title>
        <link rel="stylesheet" href="../../../css/bootstrap/bootstrap.css">
        <script src="../../../js/jquery/jquery-3.3.2.js"></script>
        <script src="../../../js/bootstrap/bootstrap.js"></script>
        <script src="../../../js/scripts/componentes.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">

            </div>
            <div class="" id="tablaEmpleado"></div>

            <!-- Modal Registro Novedades -->
            <div class="modal fade" id="registrarNovedad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Regitro de Novedades</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label for="">Turno</label>
                            <input type="text" name="" id="" class="form-control input-sm" required="required">
                            <label for="">Dia</label>
                            <input type="date   " name="" id="" class="form-control input-sm" required="required">
                            <label for="">Hora Ingreso</label>
                            <input type="text" name="" id="" class="form-control input-sm" required="required">
                            <label for="">Hora Salida</label>
                            <input type="text" name="" id="" class="form-control input-sm" required="required">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Edicion Novedades -->
            <div class="modal fade" id="editarNovedad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label for="">Turno</label>
                            <input type="text" name="" id="" class="form-control input-sm" required="required">
                            <label for="">Dia</label>
                            <input type="text" name="" id="" class="form-control input-sm" required="required">
                            <label for="">Hora Ingreso</label>
                            <input type="text" name="" id="" class="form-control input-sm" required="required">
                            <label for="">Hora Salida</label>
                            <input type="text" name="" id="" class="form-control input-sm" required="required">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    /*
$(document).ready(function(){
    $('#tabla').load('../../funciones/tablas.php');


});
*/
</script>

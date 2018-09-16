<?php 
error_reporting(0);
session_start();

$sesion = $_SESSION['usuario'];

if($sesion == null || $sesion == ''){
    echo 'No tiene autorizacion para entrar al sitio';
    die();
}

?>
<html lang="es">
    <head>
        <title>Facturacion Electronica</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../../../css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="../../../css/alertify/alertify.css">
        <link rel="stylesheet" href="../../../css/alertify/themes/default.css">

        <script src="../../../js/jquery/jquery-3.3.2.js"></script>
        <script src="../../../js/alertify/alertify.js"></script>
        <script src="../../../js/scripts/validaciones.js"></script>
    </head>
    <body>
        <div class="container">
            <br>
            <div class="jumbotron">

            </div>
            <div class="row">
                <div class="col-md-3">    
                    <label class="static/text">Usuario:  <?php echo $_SESSION['usuario'];?></label>
                </div>

                <div class="col-md-6">         
                    <br><br><br>
                    <form action="../../funciones/enviarDatos.php" method="POST" onsubmit="return validarConsecutivos()">
                        <div class="form-group">
                            <label for="tipo_fact">Tipo De Facturacion</label>
                            <select class="form-control" id="tipo_fac" name="tipo_fact">
                                <option>Facturacion De Exportacion</option>
                                <option>Facturacion Nacional</option>
                                <option>Nota Credito</option>
                                <option>Nota Debito</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="perido">Periodo</label>
                            <input type="month" class="form-control" id="per" placeholder="Escoja el periodo contable omita el dia" name="periodo" required="required">
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" class="form-control" id="fech" placeholder="Dia de la Operacion" name="fecha" required="required" >
                        </div>
                        <div class="form-group">
                            <label for="desde">Consecutivo - Desde</label>
                            <input type="number" class="form-control" id="inicio" placeholder="Indique el inicio del Consecutivo" name="desde" required = "required">
                        </div>
                        <div class="form-group">
                            <label for="hasta">Consecutivo - Hasta</label>
                            <input type="number" class="form-control" id="fin" placeholder="Indique el inicio del Consecutivo" name="hasta" required = "required" >
                        </div>
                        <button type="submit" class="btn btn-primary mb-2" id="enviar">Enviar</button>
                    </form>
                </div>

                <div class="col-md-3" style="text-align: right;">
                    <a href="cerrarSesion.php">Cerrar Sesion</a>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </body>
</html>
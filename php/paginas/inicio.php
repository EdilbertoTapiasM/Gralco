<?php 
error_reporting(0);
session_start();

$sesion = $_SESSION['usuario'];

if($sesion == null || $sesion == ''){
    echo 'No tiene autorizacion para entrar al sitio';
    die();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Gralco S.A</title>
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.css">
    <script src="../../js/jquery/jquery-3.3.2.js"></script>
    <script src="../../js/bootstrap/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <br>
        <div class="jumbotron">

        </div>
        <div class="row">
            <div class="col-md">        
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a class="navbar-brand" href="inicio.php">INICIO</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="nomina/nomina.php">Nomina</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="facturacion/facturacion.php">Facturacion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logistica/logistica.php">Logistica</a>
                            </li>   
                        </ul>
                    </div>  
                </nav>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label class="static/text">Usuario:  <?php echo $_SESSION['usuario'];?></label>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-3" style="text-align: right;">
                <a href="cerrarSesion.php">Cerrar Sesion</a>
            </div>
        </div>
    </div>
</body>
</html>
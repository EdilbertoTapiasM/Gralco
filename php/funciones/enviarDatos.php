<?php
    $con = include_once('conexion.php');

    
    $user = 'GRALCOSAP';
    $pass = 'nueva123456';
    $driver = 'Oracle in instantclient10_2';
    $cadenaConex = "DSN=DATOS;DRIVER={" . $driver . "};SERVER=192.168.1.68:1521;DATABASE=GRALCOSAP";
    $con = odbc_connect($cadenaConex, $user, $pass);

    $tipo_fac = $_POST['tipo_fact'];
    $periodo = $_POST['periodo'];
    $fecha = $_POST['fecha'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];

    switch ($tipo_fac) {
        case 'Facturacion De Exportacion':
            $tipo_fac = 'FE';
            break;
        case 'Facturacion Nacional':
            $tipo_fac = 'FN';
            break;
        case 'Nota Credito':
            $tipo_fac = 'NC';
            break;
        case 'Nota Debito':
            $tipo_fac = 'ND';
            break;
    }

    $per = (string) date("Ym", strtotime($periodo));
    $fech = (string) date("d/m/Y", strtotime($fecha));

    echo $tipo_fac . " - " . $per . " - " . $fech . " - " . $desde . " - " . $hasta;
    //$sql =odbc_prepare($con, 'CALL procesar_fe(?,?,?,?,?);');
    //$result = odbc_execute($sql, array($per . "", $fech, $tipo_fac, $desde, $hasta));

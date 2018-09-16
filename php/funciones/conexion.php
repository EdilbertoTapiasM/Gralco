<?php
    function conexion(){
        $user = 'GRALCOSAP';
        $pass = 'nueva123456';
        $driver = 'Oracle in instantclient10_2';
        $cadenaConex = "DSN=DATOS;DRIVER={" . $driver . "};SERVER=192.168.1.68:1521;DATABASE=GRALCOSAP";
        $con = odbc_connect($cadenaConex, $user, $pass);

        return $con;
    }

    if(conexion()){
        echo 'Conectado';
    }else{
        echo 'No Conectado';
    }
?>
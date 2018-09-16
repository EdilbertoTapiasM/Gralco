<?php

    $user = "gralco";
    $pass = "gralco";

    $usuario = $_POST['usuario'];
    $password = $_POST['pass'];

    if ($user == $usuario && $password== $pass){
        
        session_start();
        $_SESSION['usuario'] = $usuario;

        header("location:../paginas/inicio.php");
    }else{
        echo 'Datos De Ususario Incorrectos';
    }
 
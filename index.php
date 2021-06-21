<?php
    session_start();
    if (isset($_SESSION["usuario"])) {
        header("location:Home/index.php");  
    }
    else {
        if (isset($_GET["accion"])) {
            switch ($_GET["accion"]) {
                case '1':
                    $mensaje = "El Usuario se creo correctamente";
                    $clase = "alert alert-success";
                    break;
                case '2':
                    $mensaje = "El Usuario no se creo";
                    $clase = "alert alert-danger";
                    break;
                case '3':
                    $mensaje = "Usuario o contraseña incorrectos";
                    $clase = "alert alert-danger";
                    break;
            }
        } 
              
        require_once "View/Partial/vHeader.php";
        require_once "View/Index.php";
        require_once "View/Partial/vFooter.php";
    }
    
        
?>
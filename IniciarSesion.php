<?php
    session_start();
    require_once "Model/ClaseLogin.php";
    $login = new ClaseLogin();
    $login->usuario = $_POST["usuario"];
    $login->contrasena = $_POST["contrasena"];
    if ($login->validarUsuario() == null) {
        header("location:Index.php?accion=3");
    }else {
        $_SESSION["usuario"] = $_POST["usuario"];
        header("location:Home/Index.php?accion=2");
    }
    ?>
<?php
    require_once "../Model/ClaseLogin.php";
    $login = new ClaseLogin();
    $login->usuario = $_POST["usuario"];
    $login->contrasena = $_POST["contrasena"];
    if ($login->save() > 0) {
        header("location:../Index.php?accion=1");
    }else {
        header("location:../Index.php?accion=2");
    }
?>
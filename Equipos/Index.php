<?php
    session_start();
    if (isset($_SESSION["usuario"])){
        require_once "../Model/ClaseEquipo.php";
        $equipo = new ClaseEquipo();
        $listaEquipos = $equipo->all();
        if (isset($_GET["accion"])) {
            switch ($_GET["accion"]) {
                case '1':
                    $mensaje = "El Equipo se incerto correctamente";
                    $clase = "alert alert-success";
                    break;
                case '2':
                    $mensaje = "El Equipo no se incerto correctamente";
                    $clase = "alert alert-danger";
                    break;
                case '3':
                    $mensaje = "El Equipo se actualizo correctamente";
                    $clase = "alert alert-success";
                    break;
                case '4':
                    $mensaje = "El Equipo no se actualizo correctamente";
                    $clase = "alert alert-danger";
                    break;
                case '5':
                    $mensaje = "El Equipo se elimino correctamente";
                    $clase = "alert alert-success";
                    break;
                case '6':
                    $mensaje = "El Equipo no se elimino correctamente";
                    $clase = "alert alert-danger";
                    break;
            }
        }
        require_once "../View/Partial/headerAll.php";
        require_once "../View/Equipos/Index.php";
        require_once "../View/Partial/vFooter.php";       
    }
    else {
        header("location:../index.php");
    }
?>
<?php
    session_start();
    if (isset($_SESSION["usuario"])){
        require_once "../Model/ClaseJugador.php";
        $jugador = new ClaseJugador();
        $listaJugadores = $jugador->all();
        if (isset($_GET["accion"])) {
            switch ($_GET["accion"]) {
                case '1':
                    $mensaje = "El Jugador se incerto correctamente";
                    $clase = "alert alert-success";
                    break;
                case '2':
                    $mensaje = "El Jugador no se incerto correctamente";
                    $clase = "alert alert-danger";
                    break;
                case '3':
                    $mensaje = "El Jugador se actualizo correctamente";
                    $clase = "alert alert-success";
                    break;
                case '4':
                    $mensaje = "El Jugador no se actualizo correctamente";
                    $clase = "alert alert-danger";
                    break;
                case '5':
                    $mensaje = "El Jugador se elimino correctamente";
                    $clase = "alert alert-success";
                    break;
                case '6':
                    $mensaje = "El Jugador no se elimino correctamente";
                    $clase = "alert alert-danger";
                    break;
            }
        }
        require_once "../View/Partial/headerAll.php";
        require_once "../View/Jugadores/Index.php";
        require_once "../View/Partial/vFooter.php";
    }
    else {
        header("location:../index.php");
    }
?>
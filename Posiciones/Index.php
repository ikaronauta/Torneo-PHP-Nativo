<?php
    session_start();
    if (isset($_SESSION["usuario"])){
        require_once "../Model/ClasePosicion.php";
        $posicion = new ClasePosicion();
        $listaPosiciones = $posicion->all();
        if (isset($_GET["accion"])) {
            switch ($_GET["accion"]) {
                case '1':
                    $mensaje = "La Posicion se incerto correctamente";
                    $clase = "alert alert-success";
                    break;
                case '2':
                    $mensaje = "La Posicion no se incerto correctamente";
                    $clase = "alert alert-danger";
                    break;
                case '3':
                    $mensaje = "La Posicion se actualizo correctamente";
                    $clase = "alert alert-success";
                    break;
                case '4':
                    $mensaje = "La Posicion no se actualizo correctamente";
                    $clase = "alert alert-danger";
                    break;
                case '5':
                    $mensaje = "La Posicion se elimino correctamente";
                    $clase = "alert alert-success";
                    break;
                case '6':
                    $mensaje = "La Posicion no se elimino correctamente";
                    $clase = "alert alert-danger";
                    break;
            }
        }
        require_once "../View/Partial/headerAll.php";
        require_once "../View/Posiciones/Index.php";
        require_once "../View/Partial/vFooter.php";
    }
    else {
        header("location:../index.php");
    }
?>
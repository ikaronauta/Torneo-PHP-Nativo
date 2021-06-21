<?php
    require_once "../Model/ClaseJugador.php";
    $jugador = new ClaseJugador();
    $jugador->id_jugador = $_GET["id_jugador"];
    if ($jugador->delete() > 0) {
        header("location:Index.php?accion=5");
    }else {
        header("location:Index.php?accion=6");
    }
?>  
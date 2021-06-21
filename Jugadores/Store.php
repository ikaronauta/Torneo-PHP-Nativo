<?php
    require_once "../Model/ClaseJugador.php";
    $jugador = new ClaseJugador();
    $jugador->nombre_jugador = $_POST["nombreJugador"];
    $jugador->posicion_jugador = $_POST["posicionJugador"];
    $jugador->equipo_jugador = $_POST["equipoJugador"];
    if ($jugador->save() > 0) {
        header("location:Index.php?accion=1");
    }else {
        header("location:Index.php?accion=2");
    }

?>
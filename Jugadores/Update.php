<?php
    require_once "../Model/ClaseJugador.php";
    $jugador = new ClaseJugador();
    $jugador->id_jugador = $_POST["id_jugador"];
    $jugador->nombre_jugador = $_POST["nombre"];
    $jugador->posicion_jugador = $_POST["posicion_jugador"];
    $jugador->equipo_jugador = $_POST["equipo_jugador"];
    if ($jugador->update() > 0) {
        header("location:Index.php?accion=3");
    }else {
        header("location:Index.php?accion=4");
    }
?>
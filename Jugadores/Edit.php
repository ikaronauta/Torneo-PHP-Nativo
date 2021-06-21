<?php
    session_start();
    if (isset($_SESSION["usuario"])){
        require_once "../Model/ClaseEquipo.php";
        require_once "../Model/ClasePosicion.php";
        require_once "../Model/ClaseJugador.php";
        $id_jugador = $_GET["id_jugador"];
        $jugador = new ClaseJugador();
        $jugadorId = $jugador->find($id_jugador);
        $posicion =  new ClasePosicion();
        $listaPosiciones = $posicion->all(); 
        $equipo = new ClaseEquipo();
        $listaEquipos = $equipo->all();    
        require_once "../View/Partial/headerAll.php";
        require_once "../View/Jugadores/Edit.php";
        require_once "../View/Partial/vFooter.php";
    }
    else {
        header("location:../index.php");
    }
?>
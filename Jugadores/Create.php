<?php
    session_start();
    if (isset($_SESSION["usuario"])){
        require_once "../Model/ClaseEquipo.php";
        require_once "../Model/ClasePosicion.php";
        $equipo = new ClaseEquipo();
        $listaEquipos = $equipo->all();
        $posicion = new ClasePosicion();
        $listaPosiciones = $posicion->all();
        require_once "../View/Partial/headerAll.php";
        require_once "../View/Jugadores/Create.php";
        require_once "../View/Partial/vFooter.php";
    }
    else {
        header("location:../index.php");
    }
?>
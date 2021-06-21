<?php
    session_start();
    if (isset($_SESSION["usuario"])){
        require_once "../Model/ClaseMunicipio.php";
        require_once "../Model/ClaseEquipo.php";
        $id_equipo = $_GET["id_equipo"];
        $equipo = new ClaseEquipo();
        $equipoId = $equipo->find($id_equipo);  
        $municipio = new ClaseMunicipio();
        $listaMunicipios = $municipio->all(); 
        require_once "../View/Partial/headerAll.php";
        require_once "../View/Equipos/Edit.php";
        require_once "../View/Partial/vFooter.php";
    }
    else {
        header("location:../index.php");
    }
?>
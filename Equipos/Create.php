<?php
    session_start();
    if (isset($_SESSION["usuario"])){
        require_once "../Model/ClaseMunicipio.php";
        $municipio = new ClaseMunicipio();
        $listaMunicipios = $municipio->all();
        require_once "../View/Partial/headerAll.php";
        require_once "../View/Equipos/Create.php";
        require_once "../View/Partial/vFooter.php";
    }
    else {
        header("location:../index.php");
    }
?>
<?php
    session_start();
    if (isset($_SESSION["usuario"])){
        require_once "../Model/ClaseMunicipio.php";
        $id_municipio = $_GET["id_municipio"];
        $municipio = new ClaseMunicipio();
        $municipioId = $municipio->find($id_municipio);    
        require_once "../View/Partial/headerAll.php";
        require_once "../View/Municipios/Edit.php";
        require_once "../View/Partial/vFooter.php";
    }
    else {
        header("location:../index.php");
    }
?>
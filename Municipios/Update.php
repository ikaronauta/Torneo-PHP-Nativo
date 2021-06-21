<?php
    require_once "../Model/ClaseMunicipio.php";
    $municipio = new ClaseMunicipio();
    $municipio->id_municipio = $_POST["id_municipio"];
    $municipio->nombre_municipio = $_POST["nombre"];
    if ($municipio->update() > 0) {
        header("location:Index.php?accion=3");
    }else {
        header("location:Index.php?accion=4");
    }
?>
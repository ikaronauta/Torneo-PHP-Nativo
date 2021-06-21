<?php
    require_once "../Model/ClaseMunicipio.php";
    $municipio = new ClaseMunicipio();
    $municipio->id_municipio = $_GET["id_municipio"];
    if ($municipio->delete() > 0) {
        header("location:Index.php?accion=5");
    }else {
        header("location:Index.php?accion=6");
    }
?>  
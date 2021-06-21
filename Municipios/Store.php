<?php
    require_once "../Model/ClaseMunicipio.php";
    $municipio = new ClaseMunicipio();
    $municipio->nombre_municipio = $_POST["nombre"];
    if ($municipio->save() > 0) {
        header("location:Index.php?accion=1");
    }else {
        header("location:Index.php?accion=2");
    }
?>
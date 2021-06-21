<?php
    require_once "../Model/ClasePosicion.php";
    $posicion = new ClasePosicion();
    $posicion->id_posicion = $_POST["id_posicion"];
    $posicion->nombre_posicion = $_POST["nombrePosicion"];
    if ($posicion->update() > 0) {
        header("location:Index.php?accion=3");
    }else {
        header("location:Index.php?accion=4");
    }
?>
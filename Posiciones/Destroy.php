<?php
    require_once "../Model/ClasePosicion.php";
    $posicion = new ClasePosicion();
    $posicion->id_posicion = $_GET["id_posicion"];
    if ($posicion->delete() > 0) {
        header("location:Index.php?accion=5");
    }else {
        header("location:Index.php?accion=6");
    }
?>  
<?php
    require_once "../Model/ClasePosicion.php";
    $posicion = new ClasePosicion();
    $posicion->nombre_posicion = $_POST["nombre"];
    if ($posicion->save() > 0) {
        header("location:Index.php?accion=1");
    }else {
        header("location:Index.php?accion=2");
    }
?>
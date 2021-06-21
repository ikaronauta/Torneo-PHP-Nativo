<?php
    require_once "../Model/ClaseEquipo.php";
    $equipo = new ClaseEquipo();
    $equipo->id_equipo = $_GET["id_equipo"];
    if ($equipo->delete() > 0) {
        header("location:Index.php?accion=5");
    }else {
        header("location:Index.php?accion=6");
    }
?>  
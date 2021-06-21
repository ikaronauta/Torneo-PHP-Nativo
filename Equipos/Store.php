<?php
    require_once "../Model/ClaseEquipo.php";
    $equipo = new ClaseEquipo();
    $equipo->nombre_equipo = $_POST["nombreEquipo"];
    $equipo->dt_equipo = $_POST["dtEquipo"];
    $equipo->municipio_id = $_POST["municipio"];
    if ($equipo->save() > 0) {
        header("location:Index.php?accion=1");
    }else {
        header("location:Index.php?accion=2");
    }

?>
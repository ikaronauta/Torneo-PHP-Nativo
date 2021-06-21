<?php
    require_once "../Model/ClaseEquipo.php";
    $equipo = new ClaseEquipo();
    $equipo->id_equipo = $_POST["id_equipo"];
    $equipo->nombre_equipo = $_POST["nombre"];
    $equipo->dt_equipo = $_POST["dt_equipo"];
    $equipo->municipio_id = $_POST["municipio"];
    if ($equipo->update() > 0) {
        header("location:Index.php?accion=3");
    }else {
        header("location:Index.php?accion=4");
    }
?>
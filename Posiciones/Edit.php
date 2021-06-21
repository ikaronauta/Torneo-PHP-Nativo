<?php
    session_start();
    if (isset($_SESSION["usuario"])){
        require_once "../Model/ClasePosicion.php";
        $id_posicion = $_GET["id_posicion"];
        $posicion = new ClasePosicion();
        $posicionId = $posicion->find($id_posicion);    
        require_once "../View/Partial/headerAll.php";
        require_once "../View/Posiciones/Edit.php";
        require_once "../View/Partial/vFooter.php";
    }
    else {
        header("location:../index.php");
    }
?>
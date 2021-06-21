<?php
    session_start();
    if (isset($_SESSION["usuario"])){
        require_once "../Model/ClaseMunicipio.php";
        $municipio = new ClaseMunicipio();
        $listaMunicipios = $municipio->all();
        if (isset($_GET["accion"])) {
            switch ($_GET["accion"]) {
                case '1':
                    $mensaje = "El Municipio se incerto correctamente";
                    $clase = "alert alert-success";
                    break;
                case '2':
                    $mensaje = "El Municipio no se incerto correctamente";
                    $clase = "alert alert-danger";
                    break;
                case '3':
                    $mensaje = "El Municipio se actualizo correctamente";
                    $clase = "alert alert-success";
                    break;
                case '4':
                    $mensaje = "El Municipio no se actualizo correctamente";
                    $clase = "alert alert-danger";
                    break;
                case '5':
                    $mensaje = "El Municipio se elimino correctamente";
                    $clase = "alert alert-success";
                    break;
                case '6':
                    $mensaje = "El Municipio no se elimino correctamente";
                    $clase = "alert alert-danger";
                    break;
            }
        }
        require_once "../View/Partial/headerAll.php";
        require_once "../View/Municipios/Index.php";
        require_once "../View/Partial/vFooter.php";
    }
    else {
        header("location:../index.php");
    }
?>
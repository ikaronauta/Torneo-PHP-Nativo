<?php
    session_start(); 
    if (isset($_SESSION["usuario"])) {
        require_once "../View/Partial/headerAll.php";
        require_once "../View/Home/Index.php";
        require_once "../View/Partial/vFooter.php";  
    }
    else {
        header("location:../index.php");
    }    
?>
<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor-T02/Model/HomeModel.php";

if(isset($_POST["btnRegistrarV"])){

    $cedula= $_POST["Cedula"];
    $nombre = $_POST["Nombre"];
    $correo = $_POST["Correo"];

    $result = RegistrarV($cedula, $nombre, $correo);

    if($result){
        header("Location: ../../View/vHome/registro-vehiculos.php");
        exit;
    }else{
        $_POST["Mensaje"] = "Su información no fue registrada correctamente";
    }
}
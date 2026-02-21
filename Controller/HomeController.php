<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor-T02/Model/HomeModel.php";

$mensaje ="";

if(isset($_POST["btnRegistrarV"])){

    $cedula= $_POST["Cedula"];
    $nombre = $_POST["Nombre"];
    $correo = $_POST["Correo"];

    $result = RegistrarV($cedula, $nombre, $correo);

    if($result){
        header("Location: ../../View/vHome/registro-vehiculos.php");
        exit;
    }else{
        $mensaje = "Su información no fue registrada correctamente";
    }
}

if(isset($_POST["btnRegistrarVehiculo"])){

    $marca = $_POST["Marca"];
    $modelo = $_POST["Modelo"];
    $color = $_POST["Color"];
    $precio = $_POST["Precio"];
    $idVendedor = $_POST["IdVendedor"];

    if($marca == "" || $modelo == "" || $color == "" || $precio == "" || $idVendedor == ""){
        $mensaje = "Todos los campos son obligatorios.";
    } else {

        $result = RegistrarVehiculo($marca, $modelo, $color, $precio, $idVendedor);

        if($result){
            header("Location: ../../View/vHome/consulta-vehiculos.php");
            exit;
        } else {
            $mensaje = "No se pudo registrar el vehículo.";
        }
    }
}
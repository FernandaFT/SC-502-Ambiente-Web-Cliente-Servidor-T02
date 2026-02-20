<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor-T02/Model/UtilitarioModel.php";


function RegistrarV($cedula, $nombre, $correo)
{
    //Paso 1. Abrir la BD
    $context = OpenDataBase();

    //Paso 2. Ejecutar la sentencia
    $sp = "CALL sp_RegistrarV('$cedula', '$nombre', '$correo')";
    $result = $context -> query($sp);

    //Paso 3. Cerrar la BD
    CloseDataBase($context);
    return $result;
}
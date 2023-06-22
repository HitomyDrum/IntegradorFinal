<?php

    require_once('../models/Conexion.php');

    $nombres_vet = $_POST["nombres_vet"];
    $apellidos_vet = $_POST["apellidos_vet"];
    $dni_vet = $_POST["dni_vet"];
    $especialidad_vet = $_POST["especialidad_vet"];
    $celular_vet = $_POST["celular_vet"];
    $dir_vet = $_POST["dir_vet"];

    $con = new Conexion();

    try {
        $queryTxt = "INSERT INTO `veterinarios` (`DNI_VET`, `NAME_VET`, `APE_VET`, `CEL_VET`, `ESPEC_VET`, `DIR_VET`) VALUES ('$dni_vet', '$nombres_vet', '$apellidos_vet', '$celular_vet', '$especialidad_vet', '$dir_vet');";
        $query = $con->con->query($queryTxt);

        if ($query) {
            $mensaje_error = "El registro se ha insertado correctamente.";
        } else {
            $mensaje_error = "Error al insertar el registro.";
        }
    } catch (Exception $e) {
        $mensaje_error = "Hubo un error con la base de datos! - $e";
    }

    echo "<script>alert('$mensaje_error');</script>";
    echo "<script>window.location.href = '/Integrador/views/profile/V_VerVeterinariosAdmin.php';</script>";
?>
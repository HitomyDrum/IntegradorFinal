<?php

    require('../../models/Conexion.php');

    $con = new Conexion();

    $query = $con->con->query('SELECT * FROM veterinarios');

    $veterinarios = [];

    $i = 0;
    while($fila = $query->fetch_assoc()) {
        $veterinarios[$i] = $fila;
        $i++;
    }
?>
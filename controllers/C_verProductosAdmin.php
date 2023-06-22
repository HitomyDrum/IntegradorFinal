<?php

    require('../../models/Conexion.php');

    $con = new Conexion();

    $query = $con->con->query('SELECT * FROM productos');

    $productos = [];

    $i = 0;
    while($fila = $query->fetch_assoc()) {
        $productos[$i] = $fila;
        $i++;
    }
?>
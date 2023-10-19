<?php
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $basededatos = "diferent";
    
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
    if (!$conexion) {
        die("No se ha podido conectar a la base de datos: " . mysqli_connect_error());
    }
?>

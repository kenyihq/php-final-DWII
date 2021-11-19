<?php
    $conexion = mysqli_connect("localhost", "root", "", "bd_senati");
    mysqli_set_charset($conexion, "utf8");

    if ($conexion == false) {
        echo "No se pudo conectar";
    }
?>
<?php

    include ("conexion.php");

    /* declara variables PHP y asignar valor por POST */

    $nombre = $_POST["campoNombre"];
    $email = $_POST["campoEmail"];
    $carrera = $_POST["campoCarrera"];

    #Creamos variable para capturar el ultimo id usado
    $last_id = "SELECT c_id_estudiante FROM tb_estudiante ORDER BY c_id_estudiante DESC LIMIT 1";
    $qwery = mysqli_query($conexion, $last_id);
    #Se crea un array para almacenar el resultado de la consulta
    #El resultado se almacena en una variable $last_id que obtiene el ultimo id
    #le suma uno para que no se repita el ultimo id
    while($row=mysqli_fetch_assoc($qwery)) {
        $last_id = $row["c_id_estudiante"];        
        $last_id++;
    }



    $registrar = "INSERT INTO tb_estudiante (c_id_estudiante, c_nombre, c_email, c_carrera) VALUES ('$last_id','$nombre', '$email', '$carrera')";

    $resultado = mysqli_query($conexion, $registrar);

    if($resultado){
        // echo "<script>alert('REGISTRO EXITOSO') ;window.location='../vistas/interfaz.php'</script>";
        echo "<script>window.location='../vistas/interfaz.php'</script>";
        // echo '<script>alert("Agregado con exito")</script>';
        // header("location:../vistas/interfaz.php");
    }
    else{
        #echo "<script>alert('gettype($last_id)');window.history.go(-1);</script>";
        echo gettype($last_id_i);
        echo $last_id_i;

    }

?>
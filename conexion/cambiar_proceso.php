<?php
    include('conexion.php');

    #Creamos las variables PHP y las asignamos mendiante 'POST'

    $id = $_POST["campoId"];
    $nombre = $_POST["campoNombre"];
    $email = $_POST["campoEmail"];
    $carrera = $_POST["campoCarrera"];


    #Creamos consulta para actualizar

    $cambiar = "UPDATE tb_estudiante SET c_nombre='$nombre', c_email='$email', c_carrera='$carrera' WHERE c_id_estudiante='$id'";

    $resultado = mysqli_query($conexion, $cambiar);

    if($resultado) {
        echo "<script>alert('CAMBIO EXITOSO'); window.location='../vistas/funciones.php'</script>)";
    } else {
        echo "Error";
    }

?>
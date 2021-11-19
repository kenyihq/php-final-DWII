<?php
    include('conexion.php');
    
    $id = $_GET['id'];

    $eliminar = "DELETE FROM tb_estudiante WHERE c_id_estudiante='$id'";

    $resultado = mysqli_query($conexion, $eliminar);

    if(!$resultado){
        echo '<script>alert("Error al eliminar")</script>';
    }else{
        echo '<script>alert("Eliminado con exito")</script>';
        header("location:../vistas/funciones.php");
    }

?>
<?php

    include 'conexion.php';


    $usuario = $_POST['usuario'];
    $contrasena = $_POST['password'];

    $sql = "SELECT * FROM tb_admin WHERE user = '$usuario' AND pass = '$contrasena'";
    $result = mysqli_query($conexion, $sql);

    $array = mysqli_fetch_array($result);

    if($array['user'] === $usuario && $array['pass'] === $contrasena){
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("location: ../vistas/funciones.php");
    }else{
        session_abort();
        echo "<script>alert('Usuario o contrseña incorrecta');window.history.go(-1)</script>";
        // echo "<script>window.history.go(-1);alert('Hola mundo')</script>";
        // header("location:../index.php");
    }
    
?>
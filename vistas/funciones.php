<?php
    include("../conexion/conexion.php");
    $enlace="SELECT * FROM tb_estudiante"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODO EDITOR</title>
    <!-- <link rel="stylesheet" href="estilos.css"> -->
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

<!-- crear formulario para insertar datos -->

<div class="button2">
    <a href="./interfaz.php">Ir a registro</a>
</div>

<div class="container-table">
    <div class="table__title"> MODO EDICION EN TABLA ESTUDIANTE </div>
    <div class="table__header"> CODIGO </div>
    <div class="table__header"> NOMBRE </div>
    <div class="table__header"> EMAIL </div>
    <div class="table__header"> CARRERA </div>

    <div class="table__header"> FUNCIONES </div>


 <!--   CREAR LA CONEXION DE BD -> PHP -> MOSTRAR EN HTML  -->

        <?php $mostrar = mysqli_query($conexion, $enlace);
        while($row=mysqli_fetch_assoc($mostrar)) { ?>
            <div class="table__item"> <?php echo $row["c_id_estudiante"]; ?> </div>
            <div class="table__item"> <?php echo $row["c_nombre"]; ?> </div>
            <div class="table__item"> <?php echo $row["c_email"]; ?> </div>
            <div class="table__item"> <?php echo $row["c_carrera"]; ?> </div>

            <div class="table__item">
                <a class="table__item-edit" href="cambiar.php?id= <?php echo $row["c_id_estudiante"]; ?>">Editar</a>
                <a class="table__item-delete" href="../conexion/borrar.php?id= <?php echo $row["c_id_estudiante"]; ?>">Borrar</a>
            </div>

        <?php } mysqli_free_result($mostrar)?>
        </div>
        <script src="../javascript/mensaje.js"></script>
    
</body>
</html>
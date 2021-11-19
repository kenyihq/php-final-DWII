<?php
    include("../conexion/conexion.php");
    $enlace="SELECT * FROM tb_estudiante"
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE ESTUDIANTES</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
<!-- crear formulario para insertar datos -->
<form class="form" action = "../conexion/registrar.php" method = "POST" class="container__form"> 
    <h2 class="title">REGISTRO DE ESTUDIANTES</h2>

    <label>NOMBRE:</label>
    <input name="campoNombre" type="text" required>

    <label>EMAIL:</label>
    <input name="campoEmail" type="text" required>

    <label>CARRERA:</label>
    <input name="campoCarrera" type="text"required>
    
    <button class="button" id="save" type="submit">Guardar</button>
</form>
<div class="button2">
    <a class="validate" href="../index.php">MODO ADMINISTRADOR</a>    
</div>
  
<div class="container-table">
    <div class="table__title"> DATOS DE LA TABLA ESTUDIANTE </div>
    <div class="table__header"> CODIGO </div>
    <div class="table__header"> NOMBRE </div>
    <div class="table__header"> EMAIL </div>
    <div class="table__header"> CARRERA </div>
    
    <!--   CREAR LA CONEXION DE BD -> PHP -> MOSTRAR EN HTML  -->
    
    <?php $mostrar = mysqli_query($conexion,$enlace);
    while($row=mysqli_fetch_assoc($mostrar)) { ?>
        <div class="table__item"> <?php echo $row["c_id_estudiante"]; ?> </div>
        <div class="table__item"> <?php echo $row["c_nombre"]; ?> </div>
        <div class="table__item"> <?php echo $row["c_email"]; ?> </div>
        <div class="table__item"> <?php echo $row["c_carrera"]; ?> </div>
        
        <?php } mysqli_free_result($mostrar)?>
</div>
<script src="../javascript/mensaje.js"></script>
    
</body>
</html>
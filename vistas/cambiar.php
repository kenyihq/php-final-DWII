<?php
    include("../conexion/conexion.php");
    $id = $_GET["id"];
    $enlace = "SELECT * FROM tb_estudiante WHERE c_id_estudiante = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR ESTUDIANTE</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="button2">
        <a href="./interfaz.php">Ir a registro</a>
    </div>
    <form class="container-table" action="../conexion/cambiar_proceso.php" method="post">
        <div class="table__title">EDITAR ESTUDIANTE</div>
        <div class="table__header"> CODIGO </div>
        <div class="table__header"> NOMBRE </div>
        <div class="table__header"> EMAIL </div>
        <div class="table__header"> CARRERA </div>
        
        <?php $mostrar = mysqli_query($conexion, $enlace);
        while($row=mysqli_fetch_assoc($mostrar)) { ?>
        
        <input type="text" class="table__item" value=<?php echo $row["c_id_estudiante"];?> name="campoId">
        <input type="text" class="table__item" value=<?php echo $row["c_nombre"];?> name="campoNombre">
        <input type="text" class="table__item" value=<?php echo $row["c_email"];?> name="campoEmail">
        <input type="text" class="table__item" value=<?php echo $row["c_carrera"];?> name="campoCarrera">

        <?php } mysqli_free_result($mostrar)?>
        <button class="button2" type="submit">Modificar</button>
    </form>    
</body>
</html>
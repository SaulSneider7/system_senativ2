<?php
    include_once 'config.php';
    include_once 'session.php';

    //Recuperamos el id por metodo GET
    $id_usuario = $_GET['id'];
    //Consulta a la base de datos
    $sql = "SELECT * FROM usuarios WHERE id_usuario ='$id_usuario'"; 
    $query = mysqli_query($conexion, $sql);
    $result = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
    main {
        padding: 10px 30px;
    }
    </style>

    <?php include_once 'header.php'; ?>
    <main>
        <h1>Ver datos del usuario</h1>

        <label for="">Id:</label>
        <input type="text" value="<?php echo $result['id_usuario'] ?>" disabled><br><br>

        <label for="">Perfil:</label>
        <input type="text" value="<?php echo $result['id_perfil'] ?>" disabled><br><br>

        <label for="">Nombre:</label>
        <input type="text" value="<?php echo $result['nombre'] ?>" disabled><br><br>

        <label for="">Apellido:</label>
        <input type="text" value="<?php echo $result['apellido'] ?>" disabled><br><br>

        <label for="">Email:</label>
        <input type="text" value="<?php echo $result['email'] ?>" disabled><br><br>

        <label for="">DNI:</label>
        <input type="text" value="<?php echo $result['DNI'] ?>" disabled><br><br>

        <label for="">Direccion:</label>
        <input type="text" value="<?php echo $result['direccion'] ?>" disabled><br><br>

        <label for="">Fecha de Creacion:</label>
        <input type="text" value="<?php echo $result['fecha_creacion'] ?>" disabled><br><br>

        <label for="">Fecha de Actualizacion:</label>
        <input type="text" value="<?php echo $result['fecha_actualizacion'] ?>" disabled><br><br>

        <a href="usuarios.php">Regresar</a>
    </main>

</body>

</html>
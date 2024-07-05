<?php
    include_once 'config.php';
    include_once 'session.php';

    //Recuperamos el id por metodo GET
    $id_perfil = $_GET['id'];
    //Consulta a la base de datos
    $sql = "SELECT * FROM perfiles WHERE id_perfil ='$id_perfil'"; 
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
        text-align: center;
    }
    </style>

    <?php include_once 'header.php'; ?>
    <main>
        <h1>Ver datos del perfil</h1>
        <label for="">Id:</label>
        <input type="text" value="<?php echo $result['id_perfil'] ?>" disabled><br><br>

        <label for="">Nombre del Rol:</label>
        <input type="text" value="<?php echo $result['nombre'] ?>" disabled><br><br>

        <a href="perfiles.php">Regresar</a>
    </main>

</body>

</html>
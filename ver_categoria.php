<?php
    include_once 'config.php';
    include_once 'session.php';

    //Recuperamos el id por metodo GET
    $id_categoria = $_GET['id'];
    //Consulta a la base de datos
    $sql = "SELECT * FROM categorias WHERE id_categoria ='$id_categoria'"; 
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
        <h1>Ver datos de la Caegoria</h1>
        <label for="">Id:</label>
        <input type="text" value="<?php echo $result['id_categoria'] ?>" disabled><br><br>

        <label for="">Nombre de la Categria:</label>
        <input type="text" value="<?php echo $result['nombre_categoria'] ?>" disabled><br><br>

        <a href="categorias.php">Regresar</a>
    </main>

</body>

</html>
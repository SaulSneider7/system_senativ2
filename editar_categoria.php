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
        <h1>EDITAR CATEGORIA</h1>
        <label for="">Id:</label>
        <input id="id_categoria" type="text" value="<?php echo $result['id_categoria'] ?>" disabled><br><br>

        <label for="">Nombre de la categoria:</label>
        <input id="input_nombre" type="text" value="<?php echo $result['nombre_categoria'] ?>"><br><br>

        <a href="categorias.php">Regresar</a>
        <button type="button" id="btn_actualizar_categoria">Actualizar</button>
    </main>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- CategOrias JS -->
    <script src="categorias.js?v=<?php echo rand(); ?>"></script>
</body>

</html>
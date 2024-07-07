<?php
    include_once 'config.php';
    include_once 'session.php';


    //Lista de categorias
    $sql_categorias = "SELECT * FROM categorias";
    $result_sql_categorias = mysqli_query($conexion, $sql_categorias);
    $categorias = $result_sql_categorias->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema v2</title>
</head>

<body>
    
    <?php include_once 'header.php'; ?>

    <h1>Gestion de Categorias</h1>
    <a href="crear_categoria.php">Crear Categoria</a>
    <table border="1">
        <thead>
            <tr>
                <th>nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($categorias as $categoria_dato){ ?>
                <tr>
                    <td> <?php echo $categoria_dato['nombre_categoria'] ?> </td>
                    <td>
                        <a href="ver_categoria.php?id=<?php echo $categoria_dato['id_categoria']?>">Ver</a>
                        <a href="editar_categoria.php?id=<?php echo $categoria_dato['id_categoria']?>">Editar</a>
                        <a href="#" onclick="eliminar_categoria('<?php echo $categoria_dato['id_categoria']?>')">Eliminar</a>
                    </td>
                </tr>    
            <?php
            }
            ?>
        </tbody>
    </table>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Categorias JS -->
    <script src="categorias.js?v=<?php echo rand(); ?>"></script>
</body>

</html>
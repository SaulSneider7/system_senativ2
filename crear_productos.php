<?php
    include_once 'config.php';
    include_once 'session.php';

    //Lista de categorias
    $sql_categorias = "SELECT * FROM categorias";
    $result_sql_categorias = mysqli_query($conexion, $sql_categorias);
    $categorias = $result_sql_categorias->fetch_all(MYSQLI_ASSOC);

    //Lista de Proveedores
    $sql_proveedores = "SELECT * FROM proveedores";
    $result_sql_proveedores = mysqli_query($conexion, $sql_proveedores);
    $proveedores = $result_sql_proveedores->fetch_all(MYSQLI_ASSOC);
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

    <h1>Crear Productos</h1>

    <form action="">
        <!-- id de la session activa -->
        <input id="id_usuario" type="hidden" value="<?php echo $id_session ?>">


        <label for="">Categoria:</label>
        <select name="" id="id_categoria">
            <?php
                foreach($categorias as $categoria_dato) { ?>
                <option value="<?php echo $categoria_dato['id_categoria'] ?>">
                    <?php echo $categoria_dato['nombre_categoria'] ?>
                </option>
                <?php
                }
            ?>
        </select>
        <br><br>

        <label for="">Proveedores:</label>
        <select name="" id="id_proveedor">
            <?php
                foreach($proveedores as $proveedor_dato) { ?>
                <option value="<?php echo $proveedor_dato['id_proveedor'] ?>">
                    <?php echo $proveedor_dato['razon_social'] ?>
                </option>
                <?php
                }
            ?>
        </select>
        <br><br>

        <label for="">Codigo:</label>
        <input id="input_codigo" type="text"><br><br>

        <label for="">Nombre:</label>
        <input id="input_nombre" type="text"><br><br>

        <label for="">Descripcion:</label>
        <textarea name="" id="textarea_descripcion"></textarea> <br>
        <br>

        <label for="">Moneda:</label>
        <input id="input_moneda" type="text"><br><br>

        <label for="">Precio Compra:</label>
        <input id="input_precioCompra" type="text"><br><br>

        <label for="">Precio Venta:</label>
        <input id="input_precioVenta" type="text"><br><br>

        <button type="button" id="btn_crear_producto">Crear</button>
    </form>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Usuarios JS -->
    <script src="productos.js?v=<?php echo rand(); ?>"></script>
</body>

</html>
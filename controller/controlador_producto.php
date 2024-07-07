<?php
    include_once '../config.php';
    date_default_timezone_set('America/Lima');
    //Respuesta en Json
    header('Content-Type: aplication/json');

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    switch($action){
        case 'crearProducto':
            //Recuperacion informacion del AJAX
            $id_usuario = $_POST['id_usuario'];
            $id_categoria = $_POST['id_categoria'];
            $id_proveedor = $_POST['id_proveedor'];
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $moneda = $_POST['moneda'];
            $precio_compra = $_POST['precio_compra'];
            $precio_venta = $_POST['precio_venta'];

            //Obtenemos la fecha actual
            $fechaActual = date("Y-m-d H:i:s");

            $sql = "INSERT INTO productos (id_categoria, id_proveedor, codigo, nombre, descripcion, moneda, precio_compra, precio_venta, fecha_creacion, fecha_actualizacion, id_usuario ) VALUES ('$id_categoria', '$id_proveedor', '$codigo', '$nombre', '$descripcion', '$moneda', '$precio_compra', '$precio_venta', '$fechaActual', '$fechaActual', '$id_usuario')";
            
            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha creado el Producto"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo crear el producto"
                ]);
            }
            break;
        case 'editarProducto':
            # code...
            break;
        case 'eliminarProducto':
            # code...
            break;
    }
?>
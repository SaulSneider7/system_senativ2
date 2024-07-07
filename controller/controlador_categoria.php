<?php
    include_once '../config.php';

    //Respuesta en Json
    header('Content-Type: aplication/json');

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    switch($action){
        case 'crearCategoria':
            $nombre_categoria = $_POST['nombre'];

            $sql = "INSERT INTO categorias (nombre_categoria) VALUES ('$nombre_categoria')";
            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha creado la categoria"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo crear la categoria"
                ]);
            }
            break;
        case 'editarCategoria':
            $nombre_categoria = $_POST['nombre'];
            $id_categoria = $_POST['id_categoria'];

            $sql = "UPDATE categorias SET nombre_categoria = '$nombre_categoria' WHERE id_categoria = '$id_categoria'";
            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha actualizado la categoria"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo actualizar la categoria"
                ]);
            }
            break;
        case 'eliminarCategoria':
            $id_categoria = $_POST['id_categoria'];

            $sql = "DELETE FROM categorias WHERE id_categoria = '$id_categoria'";
            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha eliminado la categoria"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo eliminar la categoria"
                ]);
            }
            break;
    }
?>
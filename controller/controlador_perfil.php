<?php
    include_once '../config.php';

    //Respuesta en Json
    header('Content-Type: aplication/json');

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    switch($action){
        case 'crearPerfil':
            $nombre_perfil = $_POST['nombre'];

            $sql = "INSERT INTO perfiles (nombre) VALUES ('$nombre_perfil')";
            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha creado el perfil"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo crear el perfil"
                ]);
            }
            break;
        case 'editarPerfil':
            $nombre_perfil = $_POST['nombre'];
            $id_perfil = $_POST['id_perfil'];

            $sql = "UPDATE perfiles SET nombre = '$nombre_perfil' WHERE id_perfil = '$id_perfil'";
            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha actualizado el perfil"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo actualizar el perfil"
                ]);
            }
            break;
        case 'eliminarPerfil':
            $id_perfil = $_POST['id_perfil'];

            $sql = "DELETE FROM perfiles WHERE id_perfil = '$id_perfil'";
            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha eliminado el perfil"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo eliminar el perfil"
                ]);
            }
            break;
    }
?>
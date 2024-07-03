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
            //code
            break;
        case 'eliminarPerfil':
            //code
            break;
    }
?>
<?php
    include_once '../config.php';

    //Respuesta en Json
    header('Content-Type: aplication/json');

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    switch($action){
        case 'crearUsuario':
            //Recuperacion informacion del AJAX
            $id_perfil = $_POST['id_perfil'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $dni = $_POST['dni'];
            $password = $_POST['password'];
            $direccion = $_POST['direccion'];
            //Obtenemos la fecha actual
            $fechaActual = date("Y-m-d H:i:s");

            $sql = "INSERT INTO usuarios (id_perfil, nombre, apellido, email, DNI, password, direccion, fecha_creacion, fecha_actualizacion) VALUES ('$id_perfil', '$nombre', '$apellido', '$email', '$dni', '$password', '$direccion', '$fechaActual', '$fechaActual')";
            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha creado el Usuario"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo crear el usuario"
                ]);
            }
            break;
        case 'editarUsuario':
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
        case 'eliminarUsuario':
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
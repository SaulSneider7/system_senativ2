<?php
    include_once '../config.php';
    date_default_timezone_set('America/Lima');
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
            //Recuperacion informacion del AJAX
            $id_usuario = $_POST['id_usuario'];
            $id_perfil = $_POST['id_perfil'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $dni = $_POST['dni'];
            $direccion = $_POST['direccion'];

            //Obtenemos la fecha actual
            $fechaActual = date("Y-m-d H:i:s");

            $sql = "UPDATE usuarios SET id_perfil = '$id_perfil', nombre = '$nombre', apellido = '$apellido', email = '$email', DNI = '$dni', direccion = '$direccion', fecha_actualizacion = '$fechaActual' WHERE id_usuario = '$id_usuario'";

            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha modificado el Usuario"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo modificar el usuario"
                ]);
            }
            break;
        case 'eliminarUsuario':
            $id_usuario = $_POST['id_usuario'];

            $sql = "DELETE FROM usuarios WHERE id_usuario = '$id_usuario'";
            $query = mysqli_query($conexion, $sql);

            if ($query) {
                echo json_encode([
                    "estado" => "ok",
                    "mensaje" => "Se ha eliminado el usuarios"
                ]);
            } else {
                echo json_encode([
                    "estado" => "error",
                    "mensaje" => "Error: no se puedo eliminar el usuario"
                ]);
            }
            break;
    }
?>
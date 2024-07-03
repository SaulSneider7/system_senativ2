<?php
    session_start();
    include_once '../config.php';

    //Respuesta en Json
    header('Content-Type: aplication/json');

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    switch($action){
        case 'ingresar':
            $ema = $_POST['emjkjkjkjk'];
            $pass = $_POST['passkfifji'];

            $sql = "SELECT * FROM usuarios WHERE email = '$ema' ";
            $resultado_sql = mysqli_query($conexion,$sql );

            //Verificar si el usuario existe
            if ($resultado_sql->num_rows > 0) {
                $row = mysqli_fetch_array($resultado_sql);
                //Recuperar info de la BD
                $password_BD = $row['password'];
                $nombre_BD = $row['nombre'];
                $id_BD = $row['id_usuario'];

                if ($password_BD == $pass) {
                    $_SESSION['id_session'] = $id_BD;
                    $_SESSION['nombre'] = $nombre_BD;
                    echo json_encode([
                        'estado' => 'ok',
                        'mensaje' => 'El usuario existe'
                    ]);
                } else {
                    echo json_encode([
                        'estado' => 'error',
                        'mensaje' => 'Password incorrecto'
                    ]);
                }
                
            } else {
                echo json_encode([
                    'estado' => 'error',
                    'mensaje' => 'El usuario no existe'
                ]);
            }
            

            
            break;
        case 'cerrar_sesion':
            session_destroy();
            echo json_encode([
                'mensaje' => 'session eliminada'
            ]);
            break;
    }
?>
<?php
    include_once 'config.php';
    session_start();
    
    if (!isset($_SESSION['id_session'])) {
        header ('location: login.php');
    } else {
        $nombre_session = $_SESSION['nombre'];
        $id_session = $_SESSION['id_session'];
    };


    //Lista de perfiles
    $sql_perfiles = "SELECT * FROM perfiles";
    $result_sql_perfiles = mysqli_query($conexion, $sql_perfiles);
    $perfiles = $result_sql_perfiles->fetch_all(MYSQLI_ASSOC);
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

    <h1>Gestion de Perfiles</h1>
    <a href="crear_perfil.php">Crear Perfil</a>
    <table border="1">
        <thead>
            <tr>
                <th>nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($perfiles as $perfil_dato){ ?>
                <tr>
                    <td> <?php echo $perfil_dato['nombre'] ?> </td>
                    <td>
                        <a href="#">Ver</a>
                        <a href="#">Editar</a>
                        <a href="#">Eliminar</a>
                    </td>
                </tr>    
            <?php
            }
            ?>
        </tbody>
    </table>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Login JS -->
    <script src="login.js?v=<?php echo rand(); ?>"></script>
</body>

</html>
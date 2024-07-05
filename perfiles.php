<?php
    include_once 'config.php';
    include_once 'session.php';


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
                        <a href="ver_perfil.php?id=<?php echo $perfil_dato['id_perfil']?>">Ver</a>
                        <a href="editar_perfil.php?id=<?php echo $perfil_dato['id_perfil']?>">Editar</a>
                        <a href="#" onclick="eliminar_perfil('<?php echo $perfil_dato['id_perfil']?>')">Eliminar</a>
                    </td>
                </tr>    
            <?php
            }
            ?>
        </tbody>
    </table>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Perfil JS -->
    <script src="perfil.js?v=<?php echo rand(); ?>"></script>
</body>

</html>
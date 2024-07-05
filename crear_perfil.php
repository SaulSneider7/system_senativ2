<?php
    include_once 'config.php';
    include_once 'session.php';

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

    <h1>Crear Perfil</h1>

    <form action="">
        <label for="">Perfil:</label>
        <input type="text" id="nombre_perfil">
        <button type="button" id="btn_crear_perfil">Crear</button>
    </form>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Perfil JS -->
    <script src="perfil.js?v=<?php echo rand(); ?>"></script>
</body>

</html>
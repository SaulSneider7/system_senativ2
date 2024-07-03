<?php
    include_once 'config.php';
    session_start();
    
    if (!isset($_SESSION['id_session'])) {
        header ('location: login.php');
    } else {
        $nombre_session = $_SESSION['nombre'];
        $id_session = $_SESSION['id_session'];
    };
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

    <h1>Bienvenido <?php echo $nombre_session;?></h1>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Login JS -->
    <script src="login.js?v=<?php echo rand(); ?>"></script>
</body>

</html>
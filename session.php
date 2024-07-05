<?php
    session_start();
    
    if (!isset($_SESSION['id_session'])) {
        header ('location: login.php');
    } else {
        $nombre_session = $_SESSION['nombre'];
        $id_session = $_SESSION['id_session'];
    };
?>
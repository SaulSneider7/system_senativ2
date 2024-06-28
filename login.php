<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="">
        <label for="">Email:</label>
        <input type="text" id="email"> <br><br>

        <label for="">Password:</label>
        <input type="password" id="password"><br><br>

        <button type="button" id="btn_ingresar">Ingresar</button>
    </form>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Mi JS -->
    <script src="login.js?v=<?php echo rand(); ?>"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio sesion</title>
    <link rel="stylesheet" href="http://localhost/Crea%20J/css/iniciostyle.css">
    <link rel="icon" type="image/png" href="../multimedia/imagenes/favicon.ico">
    <!--<link rel="stylesheet" href="../css/menu.css">-->
</head>

<body>
    <div class="english">
        <p class="back"><a href="../html/index.php"><img src="../multimedia/imagenes/flecha.png"></a></p>
        <div class="log-in">
            <img src="../multimedia/imagenes/Logo2.png" class="logo">
            <h2>Healthy House</h2>
            <p id="rr">Login</p>
            <form action="../php/sesion.php" method="post">
                <p id="dr">Username</p>
                <input type="text" placeholder="Enter your username" name="user" required>
                <p id="cr">Password</p>
                <input type="password" class="passw" id="Input" placeholder="Enter your password" name="pass" required>
                <a href="../html/index.php"><button type="submit" class=submit value="Registrarse" id="sign">Login</button></a>
                <p id="oc"><a href="#">Forget your password?</a></p>
                <p id="cc">Dont have an account?<a href="../html/inicio4.php">Register</a></p>
            </form>
        </div>
    </div>
    <script src="../js/index.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="http://localhost/Crea%20J/css/registerstyle.css">
    <link rel="icon" type="image/png" href="../multimedia/imagenes/favicon.ico">
    <!--<link rel="stylesheet" href="../css/menu.css">-->
</head>
<body>
    <div class="english">
        <p class="back"><a href="../html/index.php"><img src="../multimedia/imagenes/flecha.png"></a></p>
        <div class="log-in">
            <img src="../multimedia/imagenes/Logo2.png" class="logo">
            <h2>Healthy House</h2>
            <p id="rr">Register</p>
            <form action="../php/Conexion.php" method="Post">
                <p id="cr">Username</p>
                <input type="text" placeholder="Enter your username" name="user" required>
                <p id="dr">Email</p>
                <input type="email" placeholder="Enter your email"  name="correo" required>
                <p id="cs">Password</p>
                <input type="password" class="passw" id="Input" placeholder="Enter your password" name="contraseña" required>
                <a href="../html/Inicio2.html"><button type="submit" class=submit name="btnregistro" value="Registrarse"
                        id="sign">Register</button></a>
                <p id="cc">Already have an account?<a href="../html/Inicio3.php">Login</a></p>
            </form>
    </div>
    
    <script src="../js/index.js"></script>
</body>
</html>
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
    <div class="spanish mostrarIdioma">
    <p class="back"><a href="../html/index.php"><img src="../multimedia/imagenes/flecha.png"></a></p>
        <div class="log-in">
            <img src="../multimedia/imagenes/Logo2.png" class="logo">
            <h2>Healthy House</h2>
            <p id="rr">Registro</p>
            <form action="../php/Conexion2.php" method="Post">
                <p id="cr">Nombre de usuario</p>
                <input type="text" placeholder="Ingrese su usuario" name="user" required>
                <p id="dr">Correo electrónico</p>
                <input type="email" placeholder="Ingrese su correo" name="correo" required>
                <p id="cs">Contraseña</p>
                <input type="password" class="passw" id="Input" placeholder="Ingrese su contraseña" name="contraseña" required>
                <a href="../html/Inicio2.html"><button type="submit" class=submit value="Registrarse"
                        id="sign">Registrarse</button></a>
                <p id="oc"><a href="#">¿Olvidaste tu Contraseña?</a></p>
                <p id="cc">Ya tienes cuenta?<a href="../html/Inicio2.php">Inicia Sesion</a></p>
            </form>
    </div>

    <script src="../js/index.js"></script>
</body>

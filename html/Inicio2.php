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
    <div class="spanish mostrarIdioma">
    <p class="back"><a href="../html/index.php"><img src="../multimedia/imagenes/flecha.png"></a></p>
        <div class="log-in">
            <img src="../multimedia/imagenes/Logo2.png" class="logo">
            <h2>Healthy House</h2>
            <p id="rr">Inicio de Sesion</p>
            <form action="../php/sesion2.php" method="post" >
                <p id="dr">Nombre de usuario</p>
                <input type="text" placeholder="Ingrese su usuario" name="user" required>
                <p id="cr">Contraseña</p>
                <input type="password" class="passw" id="Input" placeholder="Ingrese su contraseña" name="pass" required>
                <a href="../html/index.php"><button type="submit" class=submit value="Registrarse" id="sign">Iniciar
                        sesion</button></a>
                <p id="oc"><a href="#">¿Olvidaste tu Contraseña?</a></p>
                <p id="cc">No tienes una cuenta?<a href="../html/inicio.php">Registrate</a></p>
            </form>
        </div>
    </div>

    <script src="../js/index.js"></script>
</body>

</html>
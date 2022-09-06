<?php
$servidor = "localhost";  //la conexion con la base de datos
$usuario = "root";
$contraseña = "";
$BD = "healthy house";

$conexion = mysqli_connect ($servidor, $usuario, $contraseña, $BD);

if (!$conexion) {
    echo "Fallo la conexion";
    die ("connection failed: " . mysqli_connect_error());
}

?>
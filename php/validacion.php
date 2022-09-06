<?php

$nombre = $_POST["user"];
$contraseña = $_POST["pass"];


//LOGIN
if (isset($_POST["sesion"]))
{
    $query = mysqli_query($conn,"SELECT * FROM users WHERE usuario = '$nombre' AND password='$contraseña'");
    $nr = mysqli_num_rows($query);

    if($nr==1){
        echo "<script> alert('Bienvenido $nombre'); window.location='../html/index.php' </script>";
    }else{
        echo "<script> alert('El usuario NO Existe'); window.location='../html/Iniciar_Sesion.html' </script>";
    }
}

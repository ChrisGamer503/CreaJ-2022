<?php
include ("../php/Confi.php");

$Username = $_POST["user"];
$Email = $_POST["correo"];
$Password = $_POST["contraseña"];

$consultaId = "SELECT Username
               FROM users
               WHERE Username = '$Username' ";
$consultaId = mysqli_query($conexion, $consultaId);
$consultaId = mysqli_fetch_array ($consultaId);

if(!$consultaId){

    $sql = "INSERT INTO users(Username, Email, Password) Values ('$Username','$Email','$Password')";

    if (mysqli_query($conexion, $sql)){

        include ("../php/sesioniniciada2.php");

    }
    else {
        echo "ERROR: " . $sql . mysqli_error($conexion);
    }
}
else{
    include ("../php/usuario-existente2.php");
}


//cerrar base de datos
mysqli_close($conexion);

?>
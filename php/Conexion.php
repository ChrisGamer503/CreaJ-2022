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

    $sql = "INSERT INTO users(Username, Email, Password,`rol-id`) Values ('$Username','$Email','$Password')";

    if (mysqli_query($conexion, $sql)){

        include ("../php/sesioniniciada.php");

    }
    else {
        echo "ERROR: " . $sql . mysqli_error($conexion);
    }
}
else{
    include ("../php/usuario-existente.php");
}


//cerrar base de datos
mysqli_close($conexion);

?>
<?php
include("../php/confi.php");

$nombre = $_POST["name"];
$telefono = $_POST["fon"];
$correo = $_POST["mail"];
$mensaje = $_POST["mensa"];

$sql = "INSERT INTO contacto(Nombres, Telefono, Correo, Mensaje) Values ('$nombre', '$telefono', '$correo', '$mensaje')";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar){
    include ("../html/exito.php");   
}else{
    echo "ERROR"; 
}



mysqli_close($conexion);
?>
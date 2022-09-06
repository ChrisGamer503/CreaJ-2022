<?php
include ("../php/conex.php");

$Nombres = $_POST["nombre"] ?? '';
$Apellido = $_POST["apellido"] ?? '';
$Genero = $_POST["genero"] ?? '';
$Fecha = $_POST["fecha"] ?? '';
$Email = $_POST["email"] ?? '';
$Telefono = $_POST["tel"] ?? '';


$sql = "INSERT INTO personal(nombres, apellidos, genero, fecha, correo, telefono) Values ('$Nombres','$Apellido','$Genero','$Fecha','$Email','$Telefono')";

$ejecutar=mysqli_query($conexion, $sql);

if ($ejecutar){
    include ("../html/cita4.php");   
}else{
    echo "ERROR"; 
}

?>
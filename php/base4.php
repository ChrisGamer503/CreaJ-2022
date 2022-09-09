<?php
include ("../php/conex.php");

$Dato = $_POST["dato"]  ?? '';
$Tiempo = $_POST["time"]  ?? '';
$Eleccion = $_POST["eleccion"]  ?? '';

$sql = "INSERT INTO horario(dato, hora, preferencia) Values ('$Dato','$Tiempo','$Eleccion')";

$ejecutar=mysqli_query($conexion, $sql);

if ($ejecutar){
    include ("../html/cita6.php");   
}else{
    echo "ERROR"; 
}

mysqli_close($conexion);
?>
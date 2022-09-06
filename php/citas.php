<?php

include ("../php/conex.php");

$Persona = $_POST["we"] ?? '';


$sql = "INSERT INTO program(persona) Values ('$Persona')";

$ejecutar=mysqli_query($conexion, $sql);

if ($ejecutar){
    include ("../html/cita3.php");   
}else{
    echo "ERROR"; 
}

?>


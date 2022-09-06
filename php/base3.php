<?php
include ("../php/conex.php");

$Problema = $_POST["problem"];
$Sintoma = $_POST["sintom"];
$Enfermedad = $_POST["enfer"];

$sql = "INSERT INTO problema(problema, sintoma, enferm) Values ('$Problema','$Sintoma','$Enfermedad')";

$ejecutar=mysqli_query($conexion, $sql);

if ($ejecutar){
    include ("../html/cita5.php");   
}else{
    echo "ERROR"; 
}

?>
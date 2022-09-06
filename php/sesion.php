<?php
include ("../php/Confi.php");

session_start();
$_SESSION['login'] = false;
$Username = $_POST["user"];
$password = $_POST["pass"];


$consulta = "SELECT *
             FROM users
             WHERE Username = '$Username'";
$consulta = mysqli_query ($conexion, $consulta);
$consulta = mysqli_fetch_assoc($consulta);
 
if($consulta)
{
    if ($password ==  $consulta['Password']){
        $_SESSION["login"] = true;
        $_SESSION["user"] = $consulta['Username'];
        $_SESSION["pass"] = $consulta['Password'];
        
        header ('Location: ../html/index.php');

    }else{
        include ("../php/contraincorrecta.php");
    }
}
else{
    include ("../php/usuarioincorrecto.php");
}

//cerrar base de datos
mysqli_close($conexion)

?>
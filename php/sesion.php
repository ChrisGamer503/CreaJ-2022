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
 
$row = $consulta;
$rol = intval($row["id-roles"]?? '') ;
if (isset($rol)) {
    switch ($rol) {
        case 1:
            header('Location: ../html/admin.php');
            break;
        case 2:
            header('Location: ../html/index.php');
            break;
        default:
    }
}
 
if($consulta)
{
    if ($password ==  $consulta['Password']) {
        $_SESSION["login"] = true;
        $_SESSION["user"] = $consulta['Username'];
        $_SESSION["pass"] = $consulta['Password'];
        
        $rol= $row[3];
        $_SESSION['rol']= $rol;
        switch ($rol) {
        case 1:
            header('Location: ../html/admin.php');
            break;
        case 2:
            header('Location: ../html/index.php');
            break;
        default:
    }

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
<?php 

$conexion2 = mysqli_connect('localhost', 'root', '', 'citas');



?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../multimedia/imagenes/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" href="../css/idioma.css">
    <title>Healthy House</title>
</head>

<body>
    <div class="spanish mostrarIdioma">
        <div>
            <h1>Hola bienvenido <span>AdminMaster</span></h1>
            <p>Estas son las citas registradas de los pacientes</p>
        </div>
        <div>
            <div>
                <div>
                    <table>
                        <tr>
                            <td class="tittle">Nombre</td>
                            <td class="tittle">Apellido</td>
                            <td class="tittle">Genero</td>
                            <td class="tittle">Fecha de nacimiento</td>
                            <td class="tittle">Correo Electronico</td>
                            <td class="tittle">Telefono</td>
                            <td class="tittle">Fecha de cita</td>
                            <td class="tittle">Hora de cita</td>
                            <td class="tittle">Modo de cita</td>
                            <td class="tittle">Problema medico</td>
                            <td class="tittle">Posibles causas de sintomas</td>
                            <td class="tittle">Padece de enfermedades</td>
                            <td class="tittle">Persona para la cita</td>
                        </tr>

                        <?php 
                    
                    $seleccion = "SELECT * from personal, horario, problema, program";


                    $resultados = mysqli_query($conexion2,$seleccion);

                    while ($mostrar = mysqli_fetch_array($resultados)) {
                        ?>

                        <tr>
                            <td class="textbody"><?php echo $mostrar['nombres']; ?></td>
                            <td class="textbody"><?php echo $mostrar['apellidos']; ?></td>
                            <td class="textbody"><?php echo $mostrar['genero']; ?></td>
                            <td class="textbody"><?php echo $mostrar['fecha']; ?></td>
                            <td class="textbody"><?php echo $mostrar['correo']; ?></td>
                            <td class="textbody"><?php echo $mostrar['telefono']; ?></td>
                            <td class="textbody"><?php echo $mostrar['dato']; ?></td>
                            <td class="textbody"><?php echo $mostrar['hora']; ?></td>
                            <td class="textbody"><?php echo $mostrar['preferencia']; ?></td>
                            <td class="textbody"><?php echo $mostrar['problema']; ?></td>
                            <td class="textbody"><?php echo $mostrar['sintoma']; ?></td>
                            <td class="textbody"><?php echo $mostrar['enferm']; ?></td>
                            <td class="textbody"><?php echo $mostrar['persona']; ?></td>

                        </tr>
                        <?php
                    }
                    
                    ?>

                    </table>
                </div>
                <div>
                    <button><a href="../php/cerrar sesion.php">Salir</a></button>
                </div>
            </div>
        </div>

    </div>

    <div class="english">
        <div>
            <h1>Hello welcome <span>AdminMaster</span></h1>
            <p>These are the registered appointments of the patients</p>
        </div>
        <div>
            <div>
                <div>
                    <table>
                        <tr>
                            <td class="tittle">Name</td>
                            <td class="tittle">Last name</td>
                            <td class="tittle">Gender</td>
                            <td class="tittle">Date of birth</td>
                            <td class="tittle">Email</td>
                            <td class="tittle">Phone</td>
                            <td class="tittle">Appointment Date</td>
                            <td class="tittle">Appointment time</td>
                            <td class="tittle">Citation mode</td>
                            <td class="tittle">Medical problem</td>
                            <td class="tittle">Possible causes of symptoms</td>
                            <td class="tittle">Suffers from diseases</td>
                            <td class="tittle">Person for the appointment</td>
                        </tr>

                        <?php 
                    
                    $seleccion = "SELECT * from personal, horario, problema, program";


                    $resultados = mysqli_query($conexion2,$seleccion);

                    while ($mostrar = mysqli_fetch_array($resultados)) {
                        ?>

                        <tr>
                            <td class="textbody"><?php echo $mostrar['nombres']; ?></td>
                            <td class="textbody"><?php echo $mostrar['apellidos']; ?></td>
                            <td class="textbody"><?php echo $mostrar['genero']; ?></td>
                            <td class="textbody"><?php echo $mostrar['fecha']; ?></td>
                            <td class="textbody"><?php echo $mostrar['correo']; ?></td>
                            <td class="textbody"><?php echo $mostrar['telefono']; ?></td>
                            <td class="textbody"><?php echo $mostrar['dato']; ?></td>
                            <td class="textbody"><?php echo $mostrar['hora']; ?></td>
                            <td class="textbody"><?php echo $mostrar['preferencia']; ?></td>
                            <td class="textbody"><?php echo $mostrar['problema']; ?></td>
                            <td class="textbody"><?php echo $mostrar['sintoma']; ?></td>
                            <td class="textbody"><?php echo $mostrar['enferm']; ?></td>
                            <td class="textbody"><?php echo $mostrar['persona']; ?></td>

                        </tr>
                        <?php
                    }
                    
                    ?>

                    </table>
                </div>
                <div>
                    <button><a href="../php/cerrar sesion.php">Exit</a></button>
                </div>
            </div>
        </div>

    </div>



    <script src="../js/index.js"></script>
</body>

</html>
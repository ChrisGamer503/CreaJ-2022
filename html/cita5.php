<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy House</title>
    <link rel="icon" type="image/png" href="../multimedia/imagenes/favicon.ico">
    <link rel="stylesheet" href="../css/cita.css">
    <link rel="stylesheet" href="../css/idioma.css">
</head>

<body>
    <div class="spanish mostrarIdioma">
        <p class="back"><a href="../html/cita4.php"><img src="../multimedia/imagenes/flecha.png"></a></p>
        <div class="exp">
            <img src="../multimedia/imagenes/logo2.png">
            <p>Healthy House</p>
        </div>
        <form class="box" method="post" action="../php/base4.php">
            <div class="block2">
                <ul>
                    <li class="box2">Introducción</li>
                    <li class="box2">Paciente</li>
                    <li class="box2">Información personal</li>
                    <li class="box2">Padecimientos</li>
                    <li class="box1">Programación</li>
                    <li class="box2">Finalizacion</li>
                </ul>
            </div>
            <div class="img6">
                <h1>Programa tu cita</h1>
                <div class="orden">
                    <div class="progra">
                        <p>Bien escoge fecha para tu cita (día, mes, año).</p>
                        <input type="date" min="2022-09-01" max="2022-12-31" name="dato" required>
                        <p>Escoge la hora para tu cita (El horario de atención es de 8:00am a 6:00pm)</p>
                        <input type="time" min="2022-09" max="2022-12" name="time" required>
                        <p>Como prefiere su cita</p>
                        <input type="radio" name="eleccion" value="chat en linea" required>
                        <label>Chat en línea</label>
                        <input type="radio" name="eleccion" value="Videollamada" required>
                        <label>Videollamada</label>
                    </div>
                    <div class="img-cita">
                        <img src="../multimedia/imagenes/program.png">
                    </div>
                </div>
            </div>
            <div class="btn">
                <input type="submit" class="button2" value="Siguiente">
            </div>
        </form>
    </div>

    <div class="english">
        <p class="back"><a href="../html/cita4.php"><img src="../multimedia/imagenes/flecha.png"></a></p>
        <div class="exp">
            <img src="../multimedia/imagenes/logo2.png">
            <p>Healthy House</p>
        </div>
        <form class="box" method="post" action="../php/base4.php">
            <div class="block2">
                <ul>
                    <li class="box2">Introduction</li>
                    <li class="box2">Patient</li>
                    <li class="box2">Personal information</li>
                    <li class="box2">Ailments</li>
                    <li class="box1">Programming</li>
                    <li class="box2">Ending</li>
                </ul>
            </div>
            <div class="img6">
                <h1>Schedule your appointment</h1>
                <div class="orden">
                    <div class="progra">
                        <p>Either choose a date for your appointment (day, month, year).</p>
                        <input type="date" min="2022-09-01" max="2022-12-31" name="dato" required>
                        <p>Choose the time for your appointment (The hours of operation are from 8:00am to 6:00pm)</p>
                        <input type="time" min="2022-09" max="2022-12" name="time" required>
                        <p>How do you prefer your appointment</p>
                        <input type="radio" name="eleccion" value="online chat" required>
                        <label>Online Chat</label>
                        <input type="radio" name="eleccion" value="videocall" required>
                        <label>Videocall</label>
                    </div>
                    <div class="img-cita">
                        <img src="../multimedia/imagenes/program.png">
                    </div>
                </div>
            </div>
            <div class="btn">
                <input type="submit" class="button2" value="Siguiente">
            </div>
        </form>
    </div>

    <script src="../js/index.js"></script>
</body>
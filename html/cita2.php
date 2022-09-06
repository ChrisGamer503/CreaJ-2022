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
        <p class="back"><a href="../html/cita.php"><img src="../multimedia/imagenes/flecha.png"></a></p>
        <div class="exp">
            <img src="../multimedia/imagenes/logo2.png">
            <p>Healthy House</p>
        </div>
        <div class="box">
            <div class="block">
                <ul>
                    <li class="box2">Introducción</li>
                    <li class="box1">Paciente</li>
                    <li class="box2">Información personal</li>
                    <li class="box2">Padecimientos</li>
                    <li class="box2">Programación</li>
                    <li class="box2">Finalizacion</li>
                </ul>
            </div>
            <div class="table">
                <div class="question">
                    <h1>¿Para quien es la cita?</h1>
                </div>
                <form action="../php/citas.php" method="post">
                    <div class="img2">
                        <div class="boxyo" id="boxyo">
                            <label for="yo"><img src="../multimedia/imagenes/yo.png"></label>
                            <input type="radio" name="we" class="yo" id="yo" value="para mi" checked>
                            <p for="yo">Para mí</p>
                        </div>
                        <div class="boxtu" id="boxtu">
                            <label for="you"><img src="../multimedia/imagenes/otra.png"></label>
                            <input type="radio" name="we" class="yo" id="you" value="para otro">
                            <p for="you">Para otro</p>
                        </div>
                    </div>
                    <div class="btn">
                        <input type="submit" class="button2" value="Siguiente">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="english">
        <p class="back"><a href="../html/cita.php"><img src="../multimedia/imagenes/flecha.png"></a></p>
        <div class="exp">
            <img src="../multimedia/imagenes/logo2.png">
            <p>Healthy House</p>
        </div>
        <div class="box">
            <div class="block">
                <ul>
                    <li class="box2">Introduction</li>
                    <li class="box1">Patient</li>
                    <li class="box2">Personal information</li>
                    <li class="box2">Ailments</li>
                    <li class="box2">Programming</li>
                    <li class="box2">Ending</li>
                </ul>
            </div>
            <div class="table">
                <div class="question">
                    <h1>Who is the appointment for?</h1>
                </div>
                <form action="../php/citas.php" method="post">
                    <div class="img2">
                        <div class="boxyo" id="boxyoen">
                            <label for="yoen"><img src="../multimedia/imagenes/yo.png"></label>
                            <input type="radio" name="we" class="yo" id="yoen" value="for me" required>
                            <p for="youen">For me</p>
                        </div>
                        <div class="boxtu" id="boxtu">
                            <label for="youen"><img src="../multimedia/imagenes/otra.png"></label>
                            <input type="radio" name="we" class="yo" id="youen" value="for other"required>
                            <p for="youen">For other</p>
                        </div>
                    </div>
                    <div class="btn">
                        <input type="submit" class="button2" value="Next">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/idioma.js"></script>
    <script src="../js/cita.js"></script>

</body>

</html>
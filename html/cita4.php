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
        <p class="back"><a href="../html/cita3.php"><img src="../multimedia/imagenes/flecha.png"></a></p>
        <div class="exp">
            <img src="../multimedia/imagenes/logo2.png">
            <p>Healthy House</p>
        </div>
        <form class="box" action="../php/base3.php" method="post">
            <div class="block2">
                <ul>
                    <li class="box2">Introducción</li>
                    <li class="box2">Paciente</li>
                    <li class="box2">Información personal</li>
                    <li class="box1">Padecimientos</li>
                    <li class="box2">Agendado</li>
                    <li class="box2">Finalizacion</li>
                </ul>
            </div>
            <div class="img5">
                <h1>Agregue sus síntomas</h1>
                <div class="sintom-expli">
                    <div class="expli">
                        <p>Explique cual es su problema medico</p>
                        <textarea class="info2" placeholder="Escriba su problema" rows="3" name="problem"
                            required></textarea>
                        <p>Explica las causas e hipótesis de sus síntomas</p>
                        <textarea class="info2" placeholder="Escriba sus síntomas" rows="3" name="sintom"
                            required></textarea>
                        <p>Ya padecía de alguna enfermedad?</p>
                        <textarea class="info2" placeholder="Escriba sus enfermedades" name="enfer" rows="3"
                            required></textarea>
                    </div>
                    <div class="img-ex">
                        <img src="../multimedia/imagenes/sinto.png">
                    </div>
                </div>
            </div>
            <div class="btn">
                <input type="submit" class="button2" value="Siguiente">
            </div>
        </form>
    </div>


    <div class="english">
        <p class="back"><a href="../html/cita3.php"><img src="../multimedia/imagenes/flecha.png"></a></p>
        <div class="exp">
            <img src="../multimedia/imagenes/logo2.png">
            <p>Healthy House</p>
        </div>
        <form class="box" action="../php/base3.php" method="post">
            <div class="block2">
                <ul>
                    <li class="box2">Introduction</li>
                    <li class="box2">Patient</li>
                    <li class="box2">Personal information</li>
                    <li class="box1">Ailments</li>
                    <li class="box2">Programming</li>
                    <li class="box2">Ending</li>
                </ul>
            </div>
            <div class="img5">
                <h1>Add your symptoms</h1>
                <div class="sintom-expli">
                    <div class="expli">
                        <p>Explain your medical problem</p>
                        <textarea class="info2" placeholder="Write your problem" rows="3" name="problem"
                            required></textarea>
                        <p>Explains the causes and hypotheses of its symptoms</p>
                        <textarea class="info2" placeholder="Write your symptoms" rows="3" name="sintom"
                            required></textarea>
                        <p>Did you already suffer from any disease?</p>
                        <textarea class="info2" placeholder="Write down your diseases" name="enfer" rows="3"
                            required></textarea>
                    </div>
                    <div class="img-ex">
                        <img src="../multimedia/imagenes/sinto.png">
                    </div>
                </div>
            </div>
            <div class="btn">
                <input type="submit" class="button2" value="Next">
            </div>
        </form>
    </div>



    <script src="../js/index.js"></script>
</body>

</html>
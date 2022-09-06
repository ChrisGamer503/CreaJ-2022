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
        <p class="back"><a href="../html/cita2.php"><img src="../multimedia/imagenes/flecha.png"></a></p>
        <div class="exp">
            <img src="../multimedia/imagenes/logo2.png">
            <p>Healthy House</p>
        </div>
        <form class="box" action="../php/base2.php" method="post">
            <div class="block2">
                <ul>
                    <li class="box2">Introducción</li>
                    <li class="box2">Paciente</li>
                    <li class="box1">Información personal</li>
                    <li class="box2">Padecimientos</li>
                    <li class="box2">Agendado</li>
                    <li class="box2">Finalizacion</li>
                </ul>
            </div>
            <div class="img4">
                <h1>Bríndanos tu información</h1>
                <div class="form-person">
                    <div class="form-norm">
                        <p class="check">Nombres completos</p>
                        <input type="text" class="space" id="elem1" placeholder="Escriba sus nombres" name="nombre" required>
                        <p>Apellidos completos</p>
                        <input type="text" class="space elem2" placeholder="Escriba sus apellidos" name="apellido" required>
                        <p>¿Cuál es su genero?</p>
                        <input type="radio" name="genero" class="hombre" value="hombre" required>
                        <label>Hombre</label>
                        <input type="radio" name="genero" class="mujer" value="mujer" required>
                        <label>Mujer</label>
                        <p>Fecha de nacimiento (Tienes que ser mayor de 18 años)</p>
                        <input type="date" min="1945-12-31" max="2004-12-31"  required class="fecha" name="fecha" required>
                        <p>Correo electrónico</p>
                        <input type="email" class="space" placeholder="Escriba su correo" required class="correito" name="email" required>
                        <p>Teléfono</p>
                        <input type="text" class="space" placeholder="Escriba su teléfono" required class="telefonito" name="tel" required>
                    </div>
                    <div class="img-person">
                        <img src="../multimedia/imagenes/person.png">
                    </div>
                </div>
            </div>
            <div class="btn">
            <input type="submit" class="button2" value="Siguiente">
            </div>
        </form>
    </div>


    <div class="english">
        <p class="back"><a href="../html/cita2.php"><img src="../multimedia/imagenes/flecha.png"></a></p>
        <div class="exp">
            <img src="../multimedia/imagenes/logo2.png">
            <p>Healthy House</p>
        </div>
        <form class="box" action="../php/base2.php" method="post">
            <div class="block2">
                <ul>
                    <li class="box2">Introduction</li>
                    <li class="box2">Patient</li>
                    <li class="box1">Personal information</li>
                    <li class="box2">Ailments</li>
                    <li class="box2">Programming</li>
                    <li class="box2">Ending</li>
                </ul>
            </div>
            <div class="img4">
                <h1>Provide us with your information</h1>
                <div class="form-person">
                    <div class="form-norm">
                        <p class="check">Full names</p>
                        <input type="text" class="space" id="elem1" placeholder="Enter your names" name="nombre" required>
                        <p>Full Surname</p>
                        <input type="text" class="space elem2" placeholder="Enter your last name" name="apellido" required>
                        <p>What is your gender?</p>
                        <input type="radio" name="genero" class="hombre" value="man">
                        <label>Man</label>
                        <input type="radio" name="genero" class="mujer" value="woman">
                        <label>Woman</label>
                        <p>Date of birth (You must be at least 18 years old)</p>
                        <input type="date" min="1945-12-31" max="2004-12-31" required class="fecha" name="fecha">
                        <p>E-mail</p>
                        <input type="email" class="space" placeholder="Enter your email" required class="correito" name="email">
                        <p>Phone</p>
                        <input type="text" class="space" placeholder="Enter your phone" required class="telefonito" name="tel">
                    </div>
                    <div class="img-person">
                        <img src="../multimedia/imagenes/person.png">
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
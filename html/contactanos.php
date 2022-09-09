<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy House</title>
    <link rel="icon" type="image/png" href="../multimedia/imagenes/favicon.ico">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="http://localhost/Crea%20J/css/stylecontac.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
    <!-- HEADERS -->
    <?php
    include "../php/header.php";
    ?>

    <!-- ESPAÑOL -->

    <div class="spanish mostrarIdioma">
        <div class="cuerpo-contact">
            <div class="color-contact">
                <div class="position-contact">
                    <div class="text-contact">
                        <div class="txt">
                            <div class="txt-container">
                                <p class="ti1">Contacta con nosotros</p>
                            </div>
                        </div>
                        <div class="orden">
                            <div class="descrip">
                                <h1>Envía tu mensaje.</h1>
                                <p class="ti2">Por favor, póngase en contacto con nosotros ante cualquier inconveniente,
                                    duda, pregunta, etc. Estaremos
                                    siempre listos y disponibles para responderle con gran amabilidad y personalidad.
                                </p>
                                <p class="ti2">
                                    Todo lo que tienes que hacer para ponerse en contacto con nosotros es rellenar el
                                    formulario con sus datos personales
                                    y el mensaje de referencia que desea enviarnos.
                                </p>
                            </div>
                            <div class="refe2">
                                <img src="../multimedia/imagenes/contan.png">
                            </div>
                        </div>
                    </div>
                    <div class="border">
                        <p>Siempre estamos al tanto de escuchar tus opiniones 💡</p>
                    </div>
                    <div class="content">
                        <div class="contact">
                            <div class="info">
                                <img src="../multimedia/imagenes/logo.png" class="img" width="125">
                                <h2>Información<br> de contacto</h2>
                            </div>
                            <div class="items">
                                <p><img src="../multimedia/imagenes/email.svg" width="45">HealthyHouse@gmail.com</p>
                                <p><img src="../multimedia/imagenes/phone.svg" width="50">(+503) 7007-5136</p>
                            </div>
                        </div>
                        <form action="../php/contacto.php" method="post" class="form">
                            <h2>Envía un mensaje</h2>
                            <div class="user">
                                <label>Nombres</label>
                                <input type="text" placeholder="Escriba sus nombres" name="name" required>

                                <label>Teléfono / Celular</label>
                                <input type="text" placeholder="Escriba su télefono" name="fon" required>

                                <label>Correo electrónico</label>
                                <input type="email" placeholder="Escriba su correo" name="mail" required>

                                <label>Mensaje</label>
                                <textarea placeholder="Escriba su mensaje" name="mensa" required></textarea>

                                <button>Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ENGLISH -->
    <div class="english">
        <div class="cuerpo-contact">
            <div class="color-contact">
                <div class="position-contact">
                    <div class="text-contact">
                        <div class="txt">
                            <div class="txt-container">
                                <p class="ti1">Contact with us</p>
                            </div>
                        </div>
                        <div class="orden">
                            <div class="descrip">
                                <h1>Send your message.</h1>
                                <p class="ti2">Please contact us if you have any inconvenience, doubt, question, etc. We
                                    will be
                                    always ready and available to answer you with great kindness and personality, always
                                    within 24 hours a day.
                                </p>
                                <p class="ti2">
                                    All you have to do to contact us is simply fill out the form with your personal data
                                    and the reference message you wish to send us.
                                </p>
                            </div>
                            <div class="refe">
                                <img src="../multimedia/imagenes/contan.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border">
                    <p>We always look forward to hearing from you 💡</p>
                </div>
                <div class="content">
                    <div class="contact">
                        <div class="info">
                            <img src="../multimedia/imagenes/logo.png" class="img" width="125">
                            <h2>Information<br> from contact</h2>
                        </div>
                        <div class="items">
                            <p><img src="../multimedia/imagenes/email.svg" width="45">HealthyHouse@gmail.com</p>
                            <p><img src="../multimedia/imagenes/phone.svg" width="50">(+503) 7007-5136</p>
                        </div>
                    </div>
                    <form action="../php/contacto2.php" method="post" class="form">
                        <h2>Send a message</h2>
                        <div class="user">
                            <label>Names</label>
                            <input type="text" placeholder="Enter your names" name="name" required>

                            <label>Telephone / Cellular</label>
                            <input type="text" placeholder="Enter your telephone" name="fon" required>

                            <label>E-mail</label>
                            <input type="email" placeholder="Enter your email" name="mail" required>

                            <label>Message</label>
                            <textarea placeholder="Write your message" name="mensa" required></textarea>

                            <button>Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!-- FOOTERS -->
    <?php
    include "../php/footer.php";
    ?>
    <script src="../js/index.js"></script>
</body>

</html>
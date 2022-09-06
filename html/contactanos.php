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
                        <p class="ti2">Contacta con nosotros sobre cualquier inconveniencia, duda, pregunta, etc. Que tengas, siempre estaremos dispuestos y disponibles a responderte con mucha amabilidad dentro de las 24 horas del día. </p>
                    </div>
                    <div class="content">
                        <hr />
                        <h3>Escuchamos tus opiniones 💡</h3>
                        <div class="contact-wrapper">
                            <div class="contact-form">
                                <p class="spam">Envíanos un mensaje y te responderemos en las 24 horas</p>
                                <form action="../html/exito.php">
                                    <p class="name">
                                        <label for="Nombre completo"> Nombre completo</label>
                                        <input type="text" name="Nombrecompleto" id="fullname"
                                            placeholder="Escriba sus nombres">
                                    </p>
                                    <p class="surname">
                                        <label for="Apellidos completos">Apellidos completos</label>
                                        <input type="text" name="Apellidocompleto" placeholder="Escriba sus Apellidos"
                                            required>
                                    </p>
                                    <p class="phone">
                                        <label>Numero de telefono</label>
                                        <input type="tel" name="phone" placeholder="Numero de telefono" required>
                                    </p>
                                    <p class="email">
                                        <label>Correo electronico</label>
                                        <input type="email" name="email" placeholder="Escriba su correo" required>
                                    </p>
                                    <p class="block">
                                        <label>Mensaje</label>
                                        <textarea name="mensaje" rows="3" required></textarea>
                                    </p>
                                    <p class="block centrar">
                                        <button type="submit">
                                            Enviar
                                        </button>
                                    </p>
                                </form>
                            </div>
                            <div class="contact-info">
                                <h4>Mas información</h4>
                                <hr />
                                <ul>
                                    <li><img src="../multimedia/imagenes/mail.svg" width="20">San Salvador, El Salvador
                                    </li>
                                    <li><img src="../multimedia/imagenes/location.svg" width="20">HealthyHouse@gmail.com
                                    </li>
                                    <li><img src="../multimedia/imagenes/phone.svg" width="20">(+503) 7007-5136</li>
                                </ul>
                                <hr />
                                <ul class="social">
                                    <p>Redes Sociales</p>
                                    <li><img src="../multimedia/imagenes/facebook.png" width="50"></li>
                                    <li><img src="../multimedia/imagenes/instagram.png" width="50"></li>
                                    <li><img src="../multimedia/imagenes/twitter.png" width="50"></li>
                                </ul>
                            </div>
                        </div>
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
                        <p class="ti2">Please contact us about any inconvenience, doubt, question, etc. We will always be ready and available to answer you with great kindness within 24 hours a day. </p>
                    </div>
                    <div class="content">
                        <hr />
                        <h3>We listen to your opinions 💡</h3>
                        <div class="contact-wrapper">
                            <div class="contact-form">
                                <p class="spam">Send us a message and we will get back to you within 24 hours.</p>
                                <form action="../html/exito2.php">
                                    <p class="name">
                                        <label for="Nombre completo"> Full name</label>
                                        <input type="text" name="Nombrecompleto" id="fullname"
                                            placeholder="Enter your names">
                                    </p>
                                    <p class="surname">
                                        <label for="Apellidos completos">Full Surname</label>
                                        <input type="text" name="Apellidocompleto" placeholder="Enter your Last Name"
                                            required>
                                    </p>
                                    <p class="phone">
                                        <label>Telephone number</label>
                                        <input type="tel" name="phone" placeholder="Enter your phone number" required>
                                    </p>
                                    <p class="email">
                                        <label>E-mail address</label>
                                        <input type="email" name="email" placeholder="Enter your email address" required>
                                    </p>
                                    <p class="block">
                                        <label>Message</label>
                                        <textarea name="mensaje" rows="3" required></textarea>
                                    </p>
                                    <p class="block centrar">
                                        <button type="submit">
                                        Send to
                                        </button>
                                    </p>
                                </form>
                            </div>
                            <div class="contact-info">
                                <h4>More information</h4>
                                <hr />
                                <ul>
                                    <li><img src="../multimedia/imagenes/mail.svg" width="20">San Salvador, El Salvador
                                    </li>
                                    <li><img src="../multimedia/imagenes/location.svg" width="20">HealthyHouse@gmail.com
                                    </li>
                                    <li><img src="../multimedia/imagenes/phone.svg" width="20">(+503) 7007-5136</li>
                                </ul>
                                <hr />
                                <ul class="social">
                                    <p>Social Networking</p>
                                    <li><img src="../multimedia/imagenes/facebook.png" width="50"></li>
                                    <li><img src="../multimedia/imagenes/instagram.png" width="50"></li>
                                    <li><img src="../multimedia/imagenes/twitter.png" width="50"></li>
                                </ul>
                            </div>
                        </div>
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
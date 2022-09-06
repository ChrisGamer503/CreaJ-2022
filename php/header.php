    <!-- Headers -->
<?php
include ("../php/Validar sesion.php")
?>
    <div class="spanish mostrarIdioma">
        <header>
            <div class="togglemenu" id="togglemenu">
                <img src="../multimedia/imagenes/hamburger.png">
            </div>
            
            <div class="logo">
            <a href="../html/index.php"><img src="../multimedia/imagenes/logo.png" class="logo" height="70px"></a>
            <a href="../html/index.php"><p class="textlogo">Healthy House</p></a>
            </div>
            <nav class="main-menu" id="main-menu">
                <ul class="menu" id="menu">
                    <li class="nosotros"><a href="../html/nosotros.php">Nosotros</a></li>
                    <li class="enfermedades"><a href="../html/enfermedades.php">Enfermedades</a></li>
                    <li class="contacto"><a href="../html/contactanos.php">Contactanos</a></li>
                    <li class="consultas <?php esconderv2(); ?>"><a href="../html/consultas.php" >Consulta</a></li>
                    <li>

                        <div class="perfilSesion">
                            <?php
                                echo $Username;
                            ?>
                            <button class="logout <?php esconderv2(); ?>"><a href="../php/cerrar sesion.php">Cerrar Sesion</a></button>
                        </div>
                        <div class="botones-sesion <?php esconder(); ?>">
                            <button class="sesion2"><a href="../html/Inicio2.php">Iniciar Sesión</a></button>
                            <button class="sesion"><a href="../html/inicio.php">Registrarse</a></button>
                        </div>
                        
                    </li>
                    <li>
                        <div class="select">
                            <ul class="selector">
                                <li class="option principal" id="es">
                                    <img src="../multimedia/imagenes/es.png" width="30" alt="">
                                    <p>ES</p>
                                </li>
                                
                                <li class="options-langs ">
                                    <ul>
                                        <li class="option" onclick="mostrarMensaje()" id="en">
                                            <img src="../multimedia/imagenes/en.png" width="30" alt="">
                                            <p>EN</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
    </div>

<!-- Header English -->
<div class="english">
    <header>
        <div class="togglemenu" id="togglemenu">
            <img src="../multimedia/imagenes/hamburger.png">
        </div>
        
        <div class="logo">
        <a href="../html/index.php"><img src="../multimedia/imagenes/logo.png" class="logo" height="70px"></a>
        <a href="../html/index.php"><p class="textlogo">Healthy House</p></a>
        </div>
        <nav class="main-menu" id="main-menu">
            <ul class="menu" id="menu">
                <li class="nosotros"><a href="../html/nosotros.php">About us</a></li>
                <li class="enfermedades"><a href="../html/enfermedades.php">Diseases</a></li>
                <li class="contacto"><a href="../html/contactanos.php">Contact</a></li>
                <li class="consultas <?php esconderv2(); ?>"><a href="../html/consultas.php">Consultation</a></li>
                <li>
                    

                    <div class="perfilSesion">
                        <?php
                            echo $Username;
                        ?>
                        <button class="logout <?php esconderv2(); ?>"><a href="../php/cerrar sesion.php">Log Out</a></button>
                        </div>
                    <div class="botones-sesion <?php esconder(); ?>">
                        <button class="sesion2"><a href="../html/Inicio3.php">Login</a></button>
                        <button class="sesion"><a href="../html/inicio4.php">Register</a></button>
                    </div>


                </li>
                <li>
                    <div class="select">
                        <ul class="selector">
                            <li class="option principal" id="en">
                                <img src="../multimedia/imagenes/en.png" width="30" alt="">
                                <p>EN</p>
                            </li>
                            
                            <li class="options-langs ">
                                <ul>
                                    <li class="option" onclick="mostrarMensaje()" id="es">
                                        <img src="../multimedia/imagenes/es.png" width="30" alt="">
                                        <p>ES</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
</div>

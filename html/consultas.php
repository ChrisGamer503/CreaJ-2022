<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy House</title>
    <link rel="icon" type="image/png" href="../multimedia/imagenes/favicon.ico">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="http://localhost/Crea%20J/css/styleQueries.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>

    <!-- HEADERS -->

    <?php
    include "../php/header.php";
    ?>


    <!-- PAG ESPAÑOL -->

    <div class="spanish mostrarIdioma">
        <div class="queries">
            <div class="colorqueries">
                <div class="boxconsultas">
                    <div class="textconsultas">
                        <div class="tittle">
                            <p class="tittleconsultas">Consultas con los especialistas médicos</p>
                        </div>
                        <div class="txt-consultas">
                            <p class="txtconsultas">Con las consultas podrás hacer o organizar una cita con diferentes
                                especialistas médicos que estén disponibles en los diferentes días que nosotros
                                disponemos, que se ha conveniente para ti de acuerdo a tus preguntas o inconvenientes
                                que tengas</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="txt-info">
                    <h1>Especialistas disponibles</h1>
                </div>
                <div class="positionespecialista">
                    <div class="boxespecialistas">
                        <div class="botones">
                            <input type="radio" class="button-1" name="medicos" id="medico-general"
                                onclick="detectClick(this)" checked>
                            <label for="medico-general">Medico General</label>

                            <input type="radio" class="button-2" name="medicos" id="pediatra"
                                onclick="detectClick(this)">
                            <label for="pediatra">Pediatra</label>

                            <input type="radio" class="button-3" name="medicos" id="gastroenterologo"
                                onclick="detectClick(this)">
                            <label for="gastroenterologo">Gastroenterólogo</label>

                            <input type="radio" class="button-4" name="medicos" id="ortopeda"
                                onclick="detectClick(this)">
                            <label for="ortopeda">Ortopeda</label>

                            <input type="radio" class="button-5" name="medicos" id="psiquiatra"
                                onclick="detectClick(this)">
                            <label for="psiquiatra">Psiquiatra</label>

                            <input type="radio" class="button-6" name="medicos" id="alergologo"
                                onclick="detectClick(this)">
                            <label for="alergologo">Alergólogo</label>
                        </div>


                        <div class="showtext">

                            <div class="medico-general">
                                <p class="tittle-text">Medico General</p>
                                <div class="boxmedics">
                                    <div class="img-generalmedic">
                                        <img src="../multimedia/imagenes/doctor-general.jpg">
                                    </div>
                                    <div class="medic-info">
                                        <p class="bodytext">Los médicos generales o de medicina familiar son médicos que
                                            se
                                            especializan en la atención médica integral de la persona y de la familia.
                                            Después de estudiar medicina durante cuatro años, realizan un programa de
                                            residencia adicional de tres años.
                                        </p>
                                        <p class="bodytext">Los médicos de medicina familiar pueden diagnosticar y
                                            tratar
                                            una variedad de afecciones de salud y enfermedades en hombres y mujeres de
                                            todas
                                            las edades. Podrían seguir especializándose en otra área de la medicina,
                                            como la
                                            atención de los adultos mayores (geriatría) o las personas que tienen
                                            lesiones
                                            deportivas (medicina deportiva).</p>
                                    </div>
                                </div>
                            </div>


                            <div class="pediatra">
                                <p class="tittle-text">Pediatra</p>
                                <div class="boxmedics">
                                    <div class="img-pediatra">
                                        <img src="../multimedia/imagenes/pediatra.jpg">
                                    </div>
                                    <div class="medic-info">
                                        <p class="bodytext">La Pediatría es la especialidad médica que se ocupa del
                                            estudio
                                            del crecimiento y el desarrollo de los niños hasta la adolescencia, así como
                                            del
                                            tratamiento de sus enfermedades. La infancia es una etapa de la vida en
                                            continuo
                                            cambio que, desde un punto de vista biológico, se caracteriza por el
                                            crecimiento
                                            y la maduración hasta alcanzar la vida adulta.
                                        </p>
                                        <p class="bodytext">No se trata por tanto de una disciplina dirigida al estudio
                                            de
                                            las enfermedades de un determinado órgano o aparato, sino que es la medicina
                                            de
                                            un ser cuyas características físicas, psíquicas y sociales son muy distintas
                                            a
                                            las del sujeto adulto.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="gastroenterologo">
                                <p class=" tittle-text">Gastroenterólogo</p>
                                <div class="boxmedics">
                                    <div class="img-gastro">
                                        <img src="../multimedia/imagenes/gastro.jpg">
                                    </div>
                                    <div class="medic-info">
                                        <p class="bodytext">El gastroenterólogo, es el médico especialista que trata
                                            enfermedades o alteraciones de todo el tracto gastrointestinal, que va desde
                                            la
                                            boca hasta el ano. Es responsable de tratar diversas enfermedades
                                            relacionadas
                                            con la digestión, dolores de estómago, cólicos intestinales, estreñimiento y
                                            diarrea, por ejemplo.
                                        </p>
                                        <p class="bodytext">El gastroenterólogo puede trabajar en clínicas u hospitales,
                                            realizar consultas, exámenes recetar medicamentos y orientar sobre qué hacer
                                            para mantenerse saludable y con un buen funcionamiento de los órganos del
                                            abdomen.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="ortopeda">
                                <p class="tittle-text">Ortopeda</p>
                                <div class="boxmedics">
                                    <div class="img-ortopeda">
                                        <img src="../multimedia/imagenes/ortopeda.jpg">
                                    </div>
                                    <div class="medic-info">
                                        <p class="bodytext">La ortopedia es la especialidad médica que se dedica al
                                            diagnóstico, tratamiento, rehabilitación y prevención de lesiones y
                                            enfermedades
                                            del sistema musculo esquelético del cuerpo humano. Este complejo sistema
                                            incluye
                                            los huesos, las articulaciones, los ligamentos, los tendones, los músculos y
                                            los
                                            nervios que le permiten a una persona moverse, trabajar y ser activa.
                                        </p>
                                        <p class="bodytext">Si se ha lesionado en un accidente de coche o en un
                                            incidente
                                            laboral, es probable que deba visitar a un médico ortopédico. Obtenga más
                                            detalles sobre los médicos ortopédicos y cómo pueden ayudarle con su lesión
                                            o
                                            condición.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="psiquiatra">
                                <p class="tittle-text">Psiquiatra</p>
                                <div class="boxmedics">
                                    <div class="img-psiquiatra">
                                        <img src="../multimedia/imagenes/psiquiatra.jpg">
                                    </div>
                                    <div class="medic-info">
                                        <p class="bodytext">Los psiquiatras son médicos que atienden y tratan a personas
                                            con
                                            problemas de salud mental. Tratan a los pacientes de diferentes modos, por
                                            ejemplo, a través de las drogas, apoyo psicológico y diferentes “terapias de
                                            conversación”, y métodos para mejorar las circunstancias cotidianas y
                                            sociales
                                            del paciente. Trabajan en muchos lugares, por ejemplo, en hospitales
                                            psiquiátricos, hospitales generales, domicilios particulares y prisiones, y
                                            también, con las fuerzas armadas.
                                        </p>
                                        <p class="bodytext">Los psiquiatras evalúan, diagnostican y tratan a pacientes
                                            con
                                            problemas de salud mental. Éstos pueden tomar muchas formas, incluyendo
                                            depresión, trastornos alimentarios, ataques de pánico y ansiedad, abuso de
                                            drogas y alcohol, fobias y esquizofrenia.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="alergologo">
                                <p class="tittle-text">Alergólogo</p>
                                <div class="boxmedics">
                                    <div class="img-alergologo">
                                        <img src="../multimedia/imagenes/alergo.png">
                                    </div>
                                    <div class="medic-info">
                                        <p class="bodytext">Un alergólogo es un médico especializado en el diagnóstico y
                                            tratamiento de las alergias y enfermedades del sistema inmunitario. Debido a
                                            esto, en algunos países se les conoce como inmunólogos.
                                        </p>
                                        <p class="bodytext">Los profesionales de esta rama de la medicina están
                                            capacitados
                                            para lidiar con un centenar de enfermedades, aunque por supuesto, cada uno
                                            cuenta con una formación específica (por ejemplo, en alergología
                                            pediátrica). Se
                                            deriva a estos especialistas cuando se ha detectado una condición o
                                            enfermedad
                                            que así lo demanda.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button">
            <button class="button-cita"><a href="../html/cita.php">Pedir cita</a></button>
        </div>
    </div>





    <!-- PAG INGLES -->

    <div class="english">
        <div class="queries">
            <div class="colorqueries">
                <div class="boxconsultas">
                    <div class="textconsultas">
                        <div class="tittle">
                            <p class="tittleconsultas">Consultations with medical specialists</p>
                        </div>
                        <div class="txt-consultas">
                            <p class="txtconsultas">With the consultations you will be able to make or arrange an
                                appointment with different medical specialists who are available on the different days
                                that we have available, which is convenient for you according to your questions or
                                problems you have</p>
                        </div>
                    </div>
                </div>
                <div class="txt-info">
                    <h1>Specialists available</h1>
                </div>
                <div class="positionespecialista">
                    <div class="boxespecialistas">
                        <div class="botones">
                            <input type="radio" class="button-1" name="medicosEN" id="medico-generalEN"
                                onclick="detectClickEN(this)" checked>
                            <label for="medico-generalEN">General Practitioner</label>

                            <input type="radio" class="button-2" name="medicosEN" id="pediatraEN"
                                onclick="detectClickEN(this)">
                            <label for="pediatraEN">Pediatrician</label>

                            <input type="radio" class="button-3" name="medicosEN" id="gastroenterologoEN"
                                onclick="detectClickEN(this)">
                            <label for="gastroenterologoEN">Gastroenterologist</label>

                            <input type="radio" class="button-4" name="medicosEN" id="ortopedaEN"
                                onclick="detectClickEN(this)">
                            <label for="ortopedaEN">Orthopedist</label>

                            <input type="radio" class="button-5" name="medicosEN" id="psiquiatraEN"
                                onclick="detectClickEN(this)">
                            <label for="psiquiatraEN">Psychiatrist</label>

                            <input type="radio" class="button-6" name="medicosEN" id="alergologoEN"
                                onclick="detectClickEN(this)">
                            <label for="alergologoEN">Allergist</label>
                        </div>


                        <div class="showtextEN">

                            <div class="medico-generalEN">
                                <p class="tittle-text">General Practitioner</p>
                                <div class="boxmedics">
                                    <div class="img-generalmedic">
                                        <img src="../multimedia/imagenes/doctor-general.jpg">
                                    </div>
                                    <div class="medic-info">
                                        <p class="bodytext">General practitioners or family medicine physicians are
                                            physicians who specialize in the specialize in the comprehensive medical
                                            care of the individual and the family. family. After four years of medical
                                            school, they complete an additional three-year residency an additional
                                            three-year residency program.
                                        </p>
                                        <p class="bodytext">Family medicine physicians can diagnose and treat a variety
                                            of health and treat a variety of health conditions and diseases in men and
                                            women of all ages. women of all ages. They may go on to specialize in
                                            another area of medicine, such as the care of the other area of medicine,
                                            such as caring for older adults (geriatrics) or people with sports injuries
                                            (sports medicine). people who have sports injuries (sports medicine).</p>
                                    </div>
                                </div>
                            </div>


                            <div class="pediatraEN">
                                <p class="tittle-text">Pediatrician</p>
                                <div class="boxmedics">
                                    <div class="img-pediatra">
                                        <img src="../multimedia/imagenes/pediatra.jpg">
                                    </div>
                                    <div class="medic-info">
                                        <p class="bodytext">Pediatrics is the medical specialty that deals with the
                                            study of the growth and development of children through adolescence. the
                                            study of the growth and development of children up to adolescence, as well
                                            as the treatment of their diseases. Childhood is a stage of life in
                                            continuous changing stage of life, which, from a biological point of view,
                                            is characterized by growth and characterized by growth and maturation until
                                            adulthood. adulthood.
                                        </p>
                                        <p class="bodytext">It is not, therefore, a discipline aimed at the study of
                                            diseases of a particular organ or apparatus. of diseases of a particular
                                            organ or apparatus, but is the medicine of a being whose physical,
                                            psychological and social medicine of a being whose physical, psychological
                                            and social characteristics are very different from those of an adult
                                            subject. very different from those of the adult subject.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="gastroenterologoEN">
                                <p class=" tittle-text">Gastroenterologist</p>
                                <div class="boxmedics">
                                    <div class="img-gastro">
                                        <img src="../multimedia/imagenes/gastro.jpg">
                                    </div>
                                    <div class="medic-info">
                                        <p class="bodytext">The gastroenterologist is the medical specialist who treats
                                            diseases or alterations of the diseases or alterations of the entire
                                            gastrointestinal tract, from the mouth to the anus. mouth to the anus. He is
                                            responsible for treating various diseases related to digestion, stomach
                                            pains, intestinal colic, constipation and diarrhea, constipation and
                                            diarrhea, for example.
                                        </p>
                                        <p class="bodytext">The gastroenterologist may work in clinics or hospitals,
                                            perform consultations, examinations, prescribe medications and provide
                                            guidance on what to do to stay healthy and to keep healthy and
                                            well-functioning organs in the abdomen. abdomen.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="ortopedaEN">
                                <p class="tittle-text">Orthopedist</p>
                                <div class="boxmedics">
                                    <div class="img-ortopeda">
                                        <img src="../multimedia/imagenes/ortopeda.jpg">
                                    </div>
                                    <div class="medic-info">
                                        <p class="bodytext">Orthopedics is the medical specialty that deals with the
                                            diagnosis, treatment, rehabilitation and diagnosis, treatment,
                                            rehabilitation and prevention of injuries and diseases of the
                                            musculoskeletal diseases of the musculoskeletal system of the human body.
                                            This system includes the bones, joints, ligaments, tendons, muscles and
                                            nerves that enable a person to move tendons, muscles and nerves that allow a
                                            person to move, work and be active, work and be active.
                                        </p>
                                        <p class="bodytext">If you have been injured in a car accident or work-related
                                            incident, you may need to see an orthopedic doctor. work-related incident,
                                            you may need to visit an orthopedic doctor. Learn more about orthopedic
                                            doctors and how they can help you with your injury or condition. with your
                                            injury or condition.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="psiquiatraEN">
                                <p class="tittle-text">Psychiatrist</p>
                                <div class="boxmedics">
                                    <div class="img-psiquiatra">
                                        <img src="../multimedia/imagenes/psiquiatra.jpg">
                                    </div>
                                    <div class="medic-info">
                                        <p class="bodytext">Psychiatrists are physicians who see and treat people with
                                            mental health problems. with mental health problems. They treat patients in
                                            different ways, for example, through drugs, psychological support and
                                            different "talking therapies", and and "talking therapies", and methods to
                                            improve the patient's daily and social circumstances. and social
                                            circumstances of the patient. They work in many places, e.g, in psychiatric
                                            hospitals, general hospitals, private homes and prisons, as well as with the
                                            prisons, and also with the armed forces.
                                        </p>
                                        <p class="bodytext">Psychiatrists evaluate, diagnose and treat patients with
                                            mental health problems. These can take many forms, including depression,
                                            eating disorders, panic and anxiety attacks, drug and alcohol abuse, phobias
                                            and schizophrenia.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="alergologoEN">
                                <p class="tittle-text">Allergist</p>
                                <div class="boxmedics">
                                    <div class="img-alergologo">
                                        <img src="../multimedia/imagenes/alergo.png">
                                    </div>
                                    <div class="medic-info">
                                        <p class="bodytext">An allergist is a physician who specializes in the diagnosis
                                            and treatment of allergies and diseases of the immune system. and treatment
                                            of allergies and diseases of the immune system. Because of this this, in
                                            some countries they are known as immunologists.
                                        </p>
                                        <p class="bodytext">The professionals of this branch of medicine are trained to
                                            deal with a hundred are trained to deal with a hundred or so diseases,
                                            although of course, each one of course, each has specific training (e.g., in
                                            pediatric allergology). pediatric allergology). They are referred to these
                                            specialists when a condition or disease has been a condition or disease has
                                            been detected that demands it.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button">
            <button class="button-cita"><a href="../html/cita.php">Make appointment</a></button>
        </div>
    </div>





    <!-- FOOTERS -->
    <?php
        include "../php/footer.php";
    ?>
    <script src="../js/consultas.js"></script>
    <script src="../js/index.js"></script>
</body>

</html>
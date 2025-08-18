<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="El Instituto Sistemas Perú se dedica a proporcionar una educación integral de alta calidad que fomente el desarrollo académico, personal y social de nuestros estudiantes.">
    <title>ISP - Instituto</title>
    <link rel="shortcut icon" href="./public/img/icons/logo.png" type="image/png">
    <!--     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./public/css/animate.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Iconos de Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>


<body>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script async src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>


    <?php include_once 'partials/header.php'; ?>

    <script>
        // adaptar altura de cabecera
        var height = document.getElementById('header').clientHeight;
        document.getElementById('header-top').style.marginTop = height + "px";
    </script>
    <!-- ventana emergente admin -->

    <style>
        #bienvenida {
            padding-top: 7rem;
            padding-bottom: 5rem;
        }

        #bienvenida h2 {
            text-align: center;
        }

        #bienvenida p {
            text-align: justify;
        }

        #historia {
            padding-top: 7rem;
            padding-bottom: 2rem;
        }

        #historia h2 {
            text-align: center;
        }


        #lema {
            padding-top: 7rem;
            padding-bottom: 2rem;
        }

        .subcontainer {
            background: rgb(0 0 0 / 10%);
            position: absolute;
            /* left: 10%; */
            padding-left: 10%;
            padding-bottom: 1%;
            left: 0;
            right: 0;
            display: flex;
            justify-content: start;
            align-items: flex-end;
            height: 100%;
        }

        .portada img {
            width: 100%;
            height: auto;
            object-fit: cover;
            /*   object-fit: cover;
            filter: brightness(50%); 
            object-position: top;*/
        }

        .portada .titleA {
            margin-bottom: 1.5rem;
        }

        .portada a {
            color: #fff;
        }

        .portada h1 {
            color: #fff;
        }

        #valores {
            margin: 4rem 0;
            /*   background-color: var(--color7); */
            padding: 5rem 0;
        }



        .card {
            border-radius: 10px;
            padding: 1rem;
            position: relative;
        }

        .p-card {
            position: absolute;
            bottom: 8%;
            /*  transform: translate(-50%, -50%); */
            left: 0%;
            width: 100%;
            padding: 2rem;
            opacity: 0;
        }

        .p-card p {
            color: var(--color5);
            font-size: 1rem;
            text-align: justify;
        }

        .content-card {
            opacity: 1;
        }

        .content-card:hover img {
            opacity: 0;
            transition: all 0.5s ease-in-out;
        }

        .content-card:hover .card-body {
            opacity: 0;
            transition: all .6s ease-in-out;
        }

        .content-card:hover .p-card {
            opacity: 1;
            transform: translateY(-5px);
            transition: all .6s ease-in-out;
        }


        /* Estilos para carusel */

        .owl-nav {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 36%;
            width: 100%;
            transform: translateY(-50%);
            pointer-events: none;
            /* Evita que bloqueen la interacción con las imágenes */
        }

        /* Estilizar los botones */
        .owl-prev,
        .owl-next {
            background: var(--color1) !important;
            color: white !important;
            border-radius: 50% !important;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            pointer-events: all;
            /* Permite la interacción con los botones */
            transition: background 0.3s;
        }

        .owl-prev:hover,
        .owl-next:hover {
            background: var(--color1) !important;
        }

        /* Posicionar los botones */
        .owl-prev {
            position: absolute;
            left: -8px;
        }

        .owl-next {
            position: absolute;
            right: -20px;
        }

        .owl-carousel .owl-item img {

            width: 50% !important;
        }

        #mision-vision img {
            position: absolute;
            width: 45%;
            bottom: 0%;
            left: -4%;
            object-fit: cover;
        }

        #beneficios {
            padding-top: 6rem;
            padding-bottom: 6rem;
        }


        @media screen and (max-width: 500px) {


            .portada img {
                height: 30vh;
            }
        }

        @media screen and (max-width: 1400px) {


            .portada img {
                height: 30vh;
            }

            #mision-vision img {
                width: 35%;

            }

            #mision {
                padding-top: 5rem;
            }

            #vision {
                padding-top: 15rem;
            }
        }
    </style>





    <main>
        <div class="container-fluid px-0 portada position-relative">
            <!--  <div class="subcontainer">
                <div class="col-lg-6 d-flex flex-column ">

                    <h3 class="ml6" style="z-index:98;color:white;">
                        <span class="text-wrapper">
                            <span class="letters">Nosotros</span>
                        </span>
                    </h3>
                    <h2 style="color:white;z-index:99;font-size: 2rem;"> Consultora innovadora y Tecnológica.</h2>
                </div>

            </div>
 -->
            <img src="./public/img/portadas/portada_interna.jpg" width="100%" height="600">
        </div>
        <section id="bienvenida">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg">
                        <h2>
                            PALABRAS DE BIENVENIDA
                        </h2>
                        <br>

                        <p>Bienvenidos al Instituto de Educación Superior Pedagógico Privado “Nelson Rockefeller”.
                            Es un honor para mí, como director, darles la más cordial bienvenida a nuestra casa de estudios, dedicada con vocación y compromiso a la formación de futuras maestras y maestros de Educación Inicial.</p>
                        <p>En el Instituto “Nelson Rockefeller” creemos firmemente que la educación es la base del desarrollo humano y social, y que todo gran cambio empieza desde la infancia. Por ello, hemos asumido la responsabilidad de formar profesionales altamente capacitados, con sólidos valores éticos, pedagógicos y humanos, capaces de transformar la realidad educativa de nuestro país desde las primeras etapas del desarrollo infantil.
                        </p>
                        <p>Nuestra carrera profesional de Educación Inicial, con una duración de cinco años, está diseñada para brindar una formación integral, combinando la teoría con la práctica, y fomentando la creatividad, el pensamiento crítico y el amor por la enseñanza. Nos enorgullece contar con un equipo docente comprometido, instalaciones adecuadas y una comunidad educativa que valora el respeto, la inclusión y la excelencia académica.</p>
                        <p>Los invito a conocer más sobre nuestra propuesta formativa y a ser parte de este camino apasionante de formación profesional. Juntos construiremos una educación de calidad para las futuras generaciones.
                        </p>
                        <span style="text-align: center;display:block;font-weight:bold;">¡Sean todos bienvenidos!</span>
                        <span style="text-align:right;display:block;">Oswaldo Campos Monteza</span>
                        <span style="text-align:right;display:block;font-weight:bold;">Director General</span>


                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="historia">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <h2>
                            RESEÑA HISTÓRICA
                        </h2>
                        <br>
                        <p>El Instituto de Educación Superior Pedagógico Privado “Nelson Rockefeller” tuvo su nacimiento oficial en el año de 1992. En mérito al D.S.N Nº 39-94-ED, con las Especialidades de Educación Inicial, Primaria y Secundaria: Matemática, siendo reinscrita por D.S 050-2002-ED, a la fecha, cuenta con más de 3,000 egresados distribuidos del I al X Semestres Académicos .</p>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section id="lema">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <h2 class="text-center">SOMOS LOS MEJORES EN COMUNICACIÓN AUDIOVISUAL, PERIODISMO, LOCUCIÓN Y CIENCIAS PUBLICITARIAS </h2>
                    </div>
                </div>
            </div>
        </section> -->

        <section id="mision-vision" style="padding-top: 6rem;">
            <div class="container-fluid" style="padding-left: 5%;padding-right: 5%;">
                <div class="row d-flex justify-content-center">
                    <div id="mision" class="col-xxl-6 col-lg-11">
                        <!-- <div class="mx-4  h-100" style="background: url('./public/img/web/bg-mision-vision.jpg') no-repeat center center; background-size: cover;position:relative;border-radius:20px;"> -->
                        <div class="mx-4  h-100" style="background: var(--color2); position:relative;border-radius:20px;">
                            <img src="./public/img/web/mision-p.png" alt="">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-5 ">

                                </div>
                                <div class="col-lg-7 h-100">
                                    <div style="padding:50px 50px 50px 0px;">
                                        <h2 class="text-center" style="color: var(--color1);">Misión</h2>
                                        <p style="text-align: justify;padding-top:2rem;">Formar profesionales en el ámbito educativo que fomenten el desarrollo integral de los estudiantes de manera continua, sustentados en una cultura de valores, para que se desempeñen en un mundo globalizado, competitivo y productivo. Su labor se dirige a niños, jóvenes y adultos de la comunidad, a través de líderes docentes y no docentes, con una gestión eficiente de los recursos, promoviendo y difundiendo valores, cultura, deporte, ciencia y tecnología.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="vision" class="col-xxl-6 col-lg-11">
                        <!-- <div class="mx-4  h-100" style="background: url('./public/img/web/bg-mision-vision.jpg') no-repeat center center; background-size: cover;position:relative;border-radius:20px;"> -->
                        <div class="mx-4  h-100" style="background: var(--color2); position:relative;border-radius:20px;">
                            <img src="./public/img/web/vision-p.png" alt="">
                            <div class="row">
                                <div class="col-lg-5 ">

                                </div>
                                <div class="col-lg-7 h-100">
                                    <div style="padding:50px 50px 50px 0px;">
                                        <h2 class="text-center" style="color: var(--color1);">Visión</h2>
                                        <p style="text-align: justify;padding-top:2rem;">Ser una Institución Superior sólida basada en una Educación de valores, con alumnos altamente competitivos y con una sólida formación científica humanística consciente de su realidad, mejorando su calidad de vida, desarrollando una cultura de paz y democracia, con formadores de avanzada con ética profesional, líderes en su área, capaces de competir a todo nivel.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </section>
        <!-- <section id="valores">
            <div class="container-fluid" style="padding-left: 5%;padding-right:5%;">
                <div class="row">
                    <div class="col-lg-3 my-auto">
                        <h3>Nuestros Valores</h3>
                        <p>Pilares de excelencia y compromiso para una educación integral.</p>
                    </div>
                    <div class="col-lg-9">
                        <div class=" row d-flex justify-content-center slider-card owl-carousel owl-theme">
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:#4F75FF;">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/responsabilidad.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color5);">Responsabilidad</h4>
                                        </div>
                                        <div class="p-card">
                                            <p>Fomentamos la toma de decisiones conscientes y el reconocimiento de las consecuencias de nuestras acciones. Promovemos un sentido de responsabilidad hacia uno mismo, los demás y la comunidad.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:var(--color6);">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/respeto.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color1);">Respeto</h4>
                                        </div>
                                        <div class="p-card">
                                            <p style="color:var(--color1);">Fomentamos un ambiente donde se valora la diversidad y se respeta a cada individuo. Creemos en la importancia de escuchar y valorar las opiniones y experiencias de los demás.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:#4F75FF;">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/colaboracion.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color5);">Colaboración</h4>

                                        </div>
                                        <div class="p-card">
                                            <p>Fomentamos el trabajo en equipo y la cooperación entre estudiantes, docentes y la comunidad. Creemos que el aprendizaje se enriquece a través de la interacción y el intercambio de ideas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:var(--color7);">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/compromiso.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color1);">Compromiso</h4>
                                        </div>
                                        <div class="p-card">
                                            <p style="color:var(--color1);">Nos dedicamos a la formación integral de nuestros estudiantes y al desarrollo de una comunidad educativa activa y participativa. Valoramos la responsabilidad y el esfuerzo en la consecución de nuestros objetivos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:var(--color6);">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/innovacion.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color1);">Innovación</h4>
                                        </div>
                                        <div class="p-card">
                                            <p style="color:var(--color1);">Valoramos la creatividad y la búsqueda de nuevas ideas y enfoques en la enseñanza y el aprendizaje. Fomentamos un ambiente que estimula la curiosidad y la experimentación.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:#4F75FF;">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/solidaridad.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color5);">Solidaridad</h4>
                                        </div>
                                        <div class="p-card">
                                            <p>Promovemos el apoyo mutuo y la colaboración entre todos los miembros de la comunidad educativa. Fomentamos la empatía y el compromiso con el bienestar de los demás.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:var(--color7);">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/excelencia.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color1);">Excelencia</h4>
                                        </div>
                                        <div class="p-card">
                                            <p style="color:var(--color1);">Nos comprometemos a alcanzar los más altos estándares en la educación y en todas nuestras actividades. Fomentamos la búsqueda constante de la mejora y la superación personal y académica. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- BENEFICIOS -->
        <section id="beneficios">
            <div class="container">
                <h2 class="text-center mb-4 fw-bold" style="color:#761D70;">Beneficios para Nuestros Estudiantes</h2>
                <p class="text-center mb-5">Descubre todo lo que el Instituto Nelson Rockefeller tiene para ti.</p>

                <div class="row g-5 d-md-flex"><!-- Cards para escritorio -->

                    <!-- 1. Académicos -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-lg">
                            <div class="card-body text-center">
                                <i class="bi bi-book fs-1 text-primary"></i>
                                <h5 class="mt-3 fw-bold">Beneficios Académicos</h5>
                                <p>Potenciamos tu formación con recursos académicos y acompañamiento constante.</p>
                                <ul class="text-start small">
                                    <li>Tutorías semanales en cursos clave</li>
                                    <li>Clínica pedagógica</li>
                                    <li>Bibliografía digital gratuita</li>
                                    <li>Premios por rendimiento</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Motivación -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-lg">
                            <div class="card-body text-center">
                                <i class="bi bi-star fs-1 text-warning"></i>
                                <h5 class="mt-3 fw-bold">Motivación y Fidelización</h5>
                                <p>Reconocemos tu esfuerzo y fomentamos la participación con actividades que inspiran.</p>
                                <ul class="text-start small">
                                    <li>Reconocimiento al compromiso docente</li>
                                    <li>Sistema de puntos e insignias</li>
                                    <li>Actividades recreativas</li>
                                    <li>Clubes estudiantiles</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Económicos -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-lg">
                            <div class="card-body text-center">
                                <i class="bi bi-cash-stack fs-1 text-success"></i>
                                <h5 class="mt-3 fw-bold">Beneficios Económicos</h5>
                                <p>Apoyamos tu economía con becas, descuentos y alianzas estratégicas.</p>
                                <ul class="text-start small">
                                    <li>Becas académicas, deportivas o artísticas</li>
                                    <li>Descuentos por rendimiento</li>
                                    <li>Programa de referidos</li>
                                    <li>Precios preferenciales</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Bienestar -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-lg">
                            <div class="card-body text-center">
                                <i class="bi bi-heart fs-1 text-danger"></i>
                                <h5 class="mt-3 fw-bold">Bienestar y Desarrollo</h5>
                                <p>Cuidamos tu salud mental y fortalecemos tus habilidades socioemocionales.</p>
                                <ul class="text-start small">
                                    <li>Apoyo psicológico gratuito</li>
                                    <li>Talleres de habilidades blandas</li>
                                    <li>Orientación vocacional</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Formación -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-lg">
                            <div class="card-body text-center">
                                <i class="bi bi-easel fs-1 text-info"></i>
                                <h5 class="mt-3 fw-bold">Formación y Práctica</h5>
                                <p>Te preparamos para el campo laboral desde los primeros ciclos.</p>
                                <ul class="text-start small">
                                    <li>Prácticas preprofesionales</li>
                                    <li>Aula modelo infantil</li>
                                    <li>Charlas con especialistas</li>
                                    <li>Diplomas complementarios</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 6. Tecnología -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-lg">
                            <div class="card-body text-center">
                                <i class="bi bi-laptop fs-1 text-secondary"></i>
                                <h5 class="mt-3 fw-bold">Tecnología Educativa</h5>
                                <p>Aprende con herramientas digitales innovadoras para tu futuro como docente.</p>
                                <ul class="text-start small">
                                    <li>Acceso gratuito a plataformas</li>
                                    <li>Talleres de innovación</li>
                                    <li>Biblioteca virtual</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Acordeón para móviles -->
                <!-- <div class="accordion d-md-none" id="beneficiosAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#beneficio1">
                                📚 Beneficios Académicos
                            </button>
                        </h2>
                        <div id="beneficio1" class="accordion-collapse collapse show" data-bs-parent="#beneficiosAccordion">
                            <div class="accordion-body">
                                Potenciamos tu formación con recursos académicos y acompañamiento constante.
                                <ul>
                                    <li>Tutorías semanales en cursos clave</li>
                                    <li>Clínica pedagógica</li>
                                    <li>Bibliografía digital gratuita</li>
                                    <li>Premios por rendimiento</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                </div> -->
            </div>
        </section>

        <!-- 
        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->



        <br><br><br>
        <br>



    </main>
    <?php include_once 'partials/footer.php'; ?>
    <script>
        function landingnext() {
            // Reemplaza 'URL_DE_LA_OTRA_LANDING' con la URL de la landing page a la que deseas redirigir.
            window.location.href = './contenido.php';
        }

        function landingprev() {
            // Reemplaza 'URL_DE_LA_OTRA_LANDING' con la URL de la landing page a la que deseas redirigir.
            window.location.href = './consultoria.php';
        }
    </script>
    <script>
        const enviarCorreo = (e) => {
            e.preventDefault();
            let form = new FormData(document.getElementById("form-contacto"));
            fetch('/admin/email/contacto', {
                method: "POST",
                body: form
            }).then(function(res) {
                return res.text();
            }).then(function(res) {
                alert(res);
                e.target.reset();
            });
        };
    </script>
    <script>
        $(document).ready(function() {
            $(".slider-card").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 7000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                },
                navText: ["&#10094;", "&#10095;"] // Flechas personalizadas (← y →)
            });
        });
    </script>

    <script src="./public/js/hubslider.min.js"></script>
    <script>
        $('.hub-slider-slides ul').hubSlider({
            selector: $('li'),
            button: {
                next: $('.hub-slider-arrow_next'),
                prev: $('.hub-slider-arrow_prev')
            },
            transition: '0.9s',
            startOffset: 30,
            auto: true,
            time: 3, // secondly
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script>
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml6 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml6 .letter',
                translateY: ["1.2em", 0],
                translateZ: 0,
                duration: 1200,
                delay: (el, i) => 50 * i
            }).add({
                targets: '.ml6',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
    </script>
    <script>
        AOS.init();
    </script>

</body>

</html>
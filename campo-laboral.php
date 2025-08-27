<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="El Instituto Sistemas Perú se dedica a proporcionar una educación integral de alta calidad que fomente el desarrollo académico, personal y social de nuestros estudiantes.">
  <title>IESPP - NELSON ROCKEFELLER</title>
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
        #cuerpo-page {
            padding-top: 4rem;
            padding-bottom: 4rem;
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

        #carreras {
            padding-top: 5rem;
            padding-bottom: 9rem;
            padding-left: 10%;
            padding-right: 10%;
        }

        .content-carrera-curso {
            background-color: var(--color2);
            border-radius: 15px;
            position: relative;
            height: 490px;
            overflow: hidden;
            margin-left: 10px;
            margin-right: 15px;
        }

        .ccarrera-curso-img img {
            border-radius: 15px;
            width: 100%;
        }

        .ccarrera-curso-cuerpo {
            background-color: var(--color2);
            border-radius: 15px;
            position: absolute;
            bottom: 4%;
            width: 100%;
            padding: 20px;
            /*  transition: all 0.6s ease-in-out; */
        }

        /* Párrafo con altura limitada inicialmente */
        .ccarrera-curso-cuerpo p {
            text-align: justify;
            color: var(--color5);
            max-height: 70px;
            overflow: hidden;
            transition: .2s ease-in;
        }

        /* Botón oculto inicialmente */
        .ccarrera-curso-cuerpo .btn {
            position: absolute;
            transform: translateY(50px);
            transition: .2s ease-in;


        }

        /* Efecto al pasar el mouse */
        .ccarrera-curso-cuerpo:hover p {

            max-height: 190px;
            transition: max-height .5s ease-out;

        }

        .ccarrera-curso-cuerpo:hover .btn {

            transform: translateY(-20px);
            transition: .5s ease-out;

        }

        /* Estilos de Slider cursos */
        /* Ocultar los botones predeterminados */
        .owl-nav {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 40%;
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
            border-radius: 10px !important;
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
            background: var(--color2) !important;
        }

        /* Posicionar los botones */
        .owl-prev {
            position: absolute;
            left: -50px;
        }

        .owl-next {
            position: absolute;
            right: -70px;
        }



        @media screen and (max-width: 500px) {


            .portada img {
                height: 30vh;
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


        <section id="cuerpo-page">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <div>
                            <h2>Campo laboral</h2>
                            <br>
                            <p><strong>🧩 Campos Laborales para Egresadas/os en Educación Inicial</strong><br>
                                Carrera Profesional de 5 años – Educación Inicial</p>

                            <h3>1. 🏫 Instituciones Educativas Públicas y Privadas</h3>
                            <br>
                            <ul>
                                <li>Docente de aula en nivel inicial (niños de 0 a 5 años)</li>
                                <li>Coordinadora pedagógica o de nivel</li>
                                <li>Docente acompañante o de apoyo (educación inclusiva)</li>
                                <li>Directora de cuna jardín o jardín de infancia (con experiencia y capacitación complementaria)</li>
                            </ul>
                            <br>
                            <h3>2. 🧸 Centros de Estimulación Temprana y Psicopedagógicos</h3>
                            <br>
                            <ul>
                                <li>Facilitadora en programas de estimulación temprana (0-3 años)</li>
                                <li>Asistente de psicopedagogía en niños con trastornos del desarrollo</li>
                                <li>Especialista en programas de atención a la primera infancia</li>
                            </ul>
                            <br>
                            <h3>3. 👩‍👧‍👦 Programas y Proyectos Sociales</h3>
                            <br>
                            <ul>
                                <li>Promotora de educación inicial en programas sociales (Cuna Más, Qali Warma, PRONOEI, etc.)</li>
                                <li>Coordinadora de actividades lúdicas y educativas en ONGs</li>
                                <li>Asesora en proyectos de desarrollo infantil en comunidades rurales o urbano-marginales</li>
                            </ul>
                            <br>
                            <h3>4. 🎨 Espacios Alternativos de Educación Infantil</h3>
                            <br>
                            <ul>
                                <li>Animadora o tallerista en ludotecas, bibliotecas infantiles, centros culturales o clubes de lectura</li>
                                <li>Creadora de contenido educativo infantil (cuentos, videos, juegos didácticos)</li>
                                <li>Educadora en museos infantiles o espacios educativos no formales</li>
                            </ul>
                            <br>
                            <h3>5. 💼 Emprendimiento y Servicios Educativos Propios</h3>
                            <br>
                            <ul>
                                <li>Fundadora de su propio centro de estimulación temprana o inicial</li>
                                <li>Asesora pedagógica freelance para instituciones educativas</li>
                                <li>Elaboración y venta de materiales educativos (fichas, cuentos, juegos didácticos)</li>
                                <li>Tutora virtual en plataformas de educación infantil a distancia</li>
                            </ul>
                            <br>
                            <h3>6. 🔍 Investigación y Desarrollo Educativo</h3>
                            <br>
                            <ul>
                                <li>Asistente en proyectos de investigación sobre desarrollo infantil</li>
                                <li>Participante en congresos, publicaciones o seminarios sobre Educación Inicial</li>
                                <li>Colaboradora en producción de material pedagógico innovador</li>
                            </ul>
                            <br>
                            <h3>7. 🌎 Oportunidades Internacionales (convalidación o estudios adicionales)</h3>
                            <br>
                            <ul>
                                <li>Trabajo en instituciones infantiles en el extranjero (con revalidación del título)</li>
                                <li>Acceso a maestrías o diplomados en pedagogía infantil, neuroeducación, educación especial, etc.</li>
                            </ul>

                            <p>✨ <strong>Otra de las razones</strong> por las que deberías estudiar Educación Inicial es por el amplio campo laboral que te ofrece esta profesión. Como docente de Inicial podrás laborar en Nidos, también llamados PRONOEI, centros de estimulación temprana, colegios privados con Educación Inicial y colegios públicos.</p>

                            <p>💡 Asimismo, si no te sientes cómodo al trabajar para un tercero, puedes iniciar tu propio emprendimiento creando tu propio colegio o centro de Educación Inicial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br>
        <br> <br>

    </main>
    <?php include_once './enlaces-recomendados/enlaces.php'; ?>
    
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
            $(".cursos_content_slider").owlCarousel({
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


    <!-- Script para carousel automatico -->
    <!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   -->
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
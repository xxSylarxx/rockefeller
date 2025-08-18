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
                        <div id="body-pub">
                            <div>
                                <h2>Plan de estudios</h2>
                                <br>
                                <p>El plan de estudios tiene diez ciclos acad&eacute;micos con un total de 220 cr&eacute;ditos. Cada ciclo se desarrolla en diecis&eacute;is (16) semanas, treinta (30) horas semanales, cuatrocientas ochenta (480) horas por ciclo, y cuatro mil ochocientas horas (4,800) por toda la trayectoria formativa. El desarrollo de las situaciones de aprendizaje de los cursos obligatorios se realiza en la modalidad presencial.</p>
                                <p>Los cursos electivos, dependiendo de su naturaleza y de las demandas que presenten pueden desarrollarse en la modalidad presencial o semipresencial. Durante la realizaci&oacute;n de los m&oacute;dulos de pr&aacute;ctica e investigaci&oacute;n el estudiante de FID realiza sus actividades de pr&aacute;ctica pedag&oacute;gica en los centros de aplicaci&oacute;n y/o instituciones educativas en convenio con la instituci&oacute;n de Educaci&oacute;n Superior Pedag&oacute;gica, con el respectivo acompa&ntilde;amiento de los responsables de la misma.</p>
                                <p>El plan de estudios presenta la organizaci&oacute;n de los cursos y m&oacute;dulos en cada uno de los componentes curriculares. Tambi&eacute;n se detalla informaci&oacute;n sobre la naturaleza del mismo, en t&eacute;rminos de curso (C) o m&oacute;dulo (M), lo cual garantiza el logro de los resultados previstos en las competencias. Por &uacute;ltimo ubica en cada ciclo, el curso o m&oacute;dulo, se&ntilde;alando sus horas (teor&iacute;a/pr&aacute;ctica) y cr&eacute;ditos.</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <div><iframe src="./public/files/PLAN-DE-ESTUDIOS-EDUCACION-INICIAL.pdf" width="100%" height="720" frameborder="0"></iframe></div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <br><br><br>
        <br> <br>

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
    <!-- <script>
        const bodyPub = document.getElementById('body-pub'); 
        const iframe = bodyPub?.querySelector('iframe'); 

        if (iframe) {
            const initialSrc = iframe.src; 

           
            if (initialSrc.toLowerCase().includes('.pdf')) {
                const pdfJsViewerUrl = ".public/pdfjs/web/viewer.html?file=";
                const newSrc = pdfJsViewerUrl + encodeURIComponent(initialSrc); 

                iframe.id = 'pdfViewer'; 
                iframe.src = newSrc; 
                iframe.frameBorder = "0"; 
            }
        }
        addEventListener('DOMContentLoaded', () => {
            const contadores = document.querySelectorAll('.contador_cantidad')
            const velocidad = 10000000000

            const animarContadores = () => {
                for (const contador of contadores) {
                    const actualizar_contador = () => {
                        let cantidad_maxima = +contador.dataset.cantidadTotal,
                            valor_actual = +contador.innerText,
                            incremento = cantidad_maxima / velocidad

                        if (valor_actual < cantidad_maxima) {
                            contador.innerText = Math.ceil(valor_actual + incremento)
                            setTimeout(actualizar_contador, 70)
                        } else {
                            contador.innerText = cantidad_maxima
                        }
                    }
                    actualizar_contador()
                }
            }
          
            const mostrarContadores = elementos => {
                elementos.forEach(elemento => {
                    if (elemento.isIntersecting) {
                        elemento.target.classList.add('animar')
                        elemento.target.classList.remove('ocultar')
                        setTimeout(animarContadores, 600)
                    }
                });
            }
            const observer = new IntersectionObserver(mostrarContadores, {
                threshold: 0.75 
            })

            const elementosHTML = document.querySelectorAll('.contador')
            elementosHTML.forEach(elementoHTML => {
                observer.observe(elementoHTML)
            })
        });
    </script> -->
    <script>
        AOS.init();
    </script>

</body>

</html>
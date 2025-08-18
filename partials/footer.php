<style>
    /* estilos footer */

    footer {
        /* -moz-box-shadow: 3px 0px 10px rgba(94, 94, 94, 0.75);
  -webkit-box-shadow: 3px 0px 10px rgba(94, 94, 94, 0.75);
  box-shadow: 3px 0px 10px rgba(94, 94, 94, 0.75);*/

        background: var(--color1);
        background-size: 20%;
        padding-left: 7% !important;
        padding-right: 7% !important;
        position: relative;
    }

    footer #terminos {
        font-size: 1rem;
    }

    #perfiles {
        padding-top: 5.5rem;
    }

    .imgnivel {
        height: 350px;
    }

    .ubic li {
        align-items: center;
        border: none;
        background: transparent;
        justify-content: center;
    }

    footer .bar-inf2 {
        display: none;
    }

    #escudo img {
        filter: drop-shadow(0 0 5px rgb(246, 252, 251));
    }

    .div-admision {

        position: absolute;
        width: 95%;
        top: 2%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .content-img {
        width: 100%;

        height: 100%;

        overflow: hidden;

        border-top-right-radius: 20px;

        border-bottom-right-radius: 20px;

    }

    .content-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<footer class="container-fluid pt-4">
    <div class="div-admision">
        <div class="container">
            <div style="background-color: var(--color2);border-radius:20px;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="m-5">
                            <h3 style="color:var(--color1);">Proceso de admisión </h3>
                            <p> Descubre nuestras opciones de admisión y selecciona <br> la que mejor se ajuste a ti.</p>
                            <br>
                            <div class="col-lg  d-flex justify-content-start">
                                <a class="btn" href="./admision.php" onclick="openRegisterModal()">Ver Más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                                <script>
                                    function openRegisterModal() {
                                        var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
                                        registerModal.show();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-img">
                            <img src="./public/img/web/bg-admision1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div style="padding-top: 11rem;">
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-3">
                <div class="d-flex justify-content-center">
                    <img src="./public/img/icons/escudo.png" class="img-fluid" alt="" width="50%" style="filter: drop-shadow(0 0 5px rgb(246, 252, 251));">
                </div>
                <br>
                <div>
                    <p style="color:var(--color5);text-align:start; font-weight:none;">El Instituto de Sistemas es una comunidad educativa comprometida con el aprendizaje y la innovación en el ámbito tecnológico.</p>
                </div>
                <!--<div class="row d-flex ">
                  <div class="col-lg-5" style="font-size:1rem;">Follow Us</div>
                  <div class="col-lg-2"><i class="fab fa-facebook-f"></i></div>
                  <div class="col-lg-2"><i class="fab fa-facebook-f"></i></div>
                  <div class="col-lg-2"><i class="fab fa-facebook-f"></i></div>
              </div>-->
                <div class="d-flex justify-content-center">
                    <!--  <div class="col-lg-2">
                        <div style="border-radius:50%;background: var(--color2);width:40px;height:40px;padding-top:4px;">
                            <a href="https://www.instagram.com/berkeleyschoolperu?igsh=ZGV0cWtvNXUyamln" style="color:var(--color1);font-size:20px;" target="_blank">
                                <center><i class="fab fa-instagram"></i></center>
                            </a>
                        </div>
                    </div> -->
                    <div class="col-lg-2">
                        <div style="border-radius:50%;background:white;width:40px;height:40px;padding-top:4px;">
                            <a href="https://www.facebook.com/institutopedagogiconelsonrockefeller" style="color:var(--color1);font-size:20px;" target="_blank">
                                <center><i class="fab fa-facebook"></i></center>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div style="border-radius:50%;background:white;width:40px;height:40px;padding-top:4px;">
                            <a href="https://www.tiktok.com/@iesppnelsonrockefeller" style="color:var(--color1);font-size:20px;" target="_blank">
                                <center><i class="fab fa-youtube"></i></center>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div style="border-radius:50%;background:white;width:40px;height:40px;padding-top:4px;">
                            <a href="https://www.tiktok.com/@iesppnelsonrockefeller" style="color:var(--color1);font-size:20px;" target="_blank">
                                <center><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 448 512">
                                        <path d="M448,209.91a210,210,0,0,1-122.77-39.25V346.5a165.65,165.65,0,1,1-141.47-163.58v84.86a82.26,82.26,0,1,0,57.29,78.72V0h84.18A126.94,126.94,0,0,0,448,126.83Z" />
                                    </svg>
                                </center>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div style="border-radius:50%;background:white;width:40px;height:40px;padding-top:4px;">
                            <a href="https://www.instagram.com/instituto_nelson_rockefeller/" style="color:var(--color1);font-size:20px;" target="_blank">
                                <center><i class="fab fa-instagram"></i></center>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div style="border-radius:50%;background:white;width:40px;height:40px;padding-top:4px;">
                            <a href="https://wa.me/+51916144934" style="color:var(--color1);font-size:20px;" target="_blank">
                                <center><i class="fab fa-whatsapp"></i></center>
                            </a>
                        </div>
                    </div>
                </div>
                <br>

            </div>

            <div class="col-lg-2 px-3">
                <div>
                    <h3 style="color:var(--color5);font-weight:bold;">Navegación</h3>
                </div>
                <div class="py-2">
                    <p style="color:var(--color5);font-weight:none;" class="m-0"> <a class="text-white" href="./nosotros.php"> - Nosotros</p></a>
                </div>
                <div class="py-2">
                    <p style="color:var(--color5);font-weight:none;" class="m-0"><a class="text-white" href="./cursos.php"> - Educación Inicial</p></a>
                </div>
                <div class="py-2">
                    <p style="color:var(--color5);font-weight:none;" class="m-0"> <a class="text-white" href="./convenios.php">- Convenios</p></a>
                </div>
                <div class="py-2">
                    <p style="color:var(--color5);font-weight:none;" class="m-0"> <a class="text-white" href="./transparencia.php"> - Transparencia</p></a>
                </div>
                <div class="py-2">
                    <p style="color:var(--color5);font-weight:none;" class="m-0"> <a class="text-white" href="./noticias.php"> - Noticias</p></a>
                </div>
                <div class="py-2">
                    <p style="color:var(--color5);font-weight:none;" class="m-0"><a class="text-white" href="./admision.php"> - Admision</p></a>
                </div>



            </div>
            <div class="col-lg-3 ">
                <div>
                    <h3 style="color:var(--color5);font-weight:bold;">Contáctanos</h3>
                </div>
                <div class="py-2">
                    <p style="color:var(--color5);font-weight:none;" class="m-0"> <i class="fas fa-phone-volume"></i><a class="text-white" href="tel:+51916144934"> +51 916 144 934</p></a>
                </div>
                <div class="py-2">
                    <p style="color:var(--color5);font-weight:none;" class="m-0"><a class="text-white" href="https://maps.app.goo.gl/aV61HX9XxMQny9S2A"> <i class="fas fa-location-arrow"></i> Av. 9 de Diciembre 378 Lima. (Ex – Paseo Colon).</a>
                    </p>
                </div>
                <div class="py-2">
                    <p style="color:var(--color5);font-weight:none;" class="m-0"> <i class="far fa-clock"></i> Horario de atención: Lunes a Sábados de 9:00 am a 7:00 pm.</p>
                </div>

            </div>
            <div class="col-lg-3 ">
                <div>
                    <h3 style="color:var(--color5);font-weight:bold;">Noticias Recientes</h3>
                    <br>
                    <a href="./view.php?id=2">
                        <div class="row d-flex justify-content-around">
                            <div class="col-lg-5"><img src="./public/img/galeria/portada_pub3.jpg" style="border-radius:5px;object-fit:cover;height:100px;width:100%;object-position:top;" class="img-fluid" alt=""></div>
                            <div class="col-lg-7 my-auto"><span style="color:var(--color5);">COMUNICADO</span></div>
                        </div>
                    </a>
                    <hr style="color:Var(--color2);">
                    <a href="./entrada/examination-and-document-exchange-platfo">
                        <div class="row d-flex justify-content-around">
                            <div class="col-lg-5"><img src="./public/img/galeria/noticia2.jpg" style="border-radius:5px;object-fit:cover;height:100px;width:100%;object-position:top;" alt=""></div>
                            <div class="col-lg-7 my-auto"><span style="color:var(--color5);">CONVENIO CON LA RED DE PARÁMEDICOS DEL PERÚ </span></div>
                        </div>
                    </a>
                    <hr style="color:Var(--color2);">
                </div>
                <br>


            </div>
            <br>
            <hr class="p-0 m-0" style="color:Var(--color2);">

        </div>

        <div class="row d-flex justify-content-start py-5" style="position: relative;">
            <a style="position: absolute;color:var(--color2);background:var(--color2);width:50px;height:50px;border-radius:5px;display:flex;text-align:center;align-items:center;justify-content:center;left:99%;top:-16%;" href="#">
                <span><i class="fas fa-chevron-up" style="color:var(--color1);font-size:1.5rem;"></i></span>
            </a>
            <div class="col-lg-12 "><span style="color:var(--color5);text-align:center;display:block;">© 2025 Todos los derechos reservados, Instituto Pedagógico Nelson Rockefeller.</span></div>
        </div>

    </div>


</footer>
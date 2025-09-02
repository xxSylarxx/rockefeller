<style>
    #networks {
        position: fixed;
        z-index: 800;
        display: flex;
        align-items: center;
        height: 60vh;
        font-size: 20px;
        right: 0px;
        width: 110px;
    }

    #networks .item-1 {
        background-color: #d4d1d1;
        color: white;
        padding: 9px 13px;
        text-align: center;
        border-top-left-radius: 7px;
    }

    #networks .item-2 {
        background-color: #d4d1d1;
        color: white;
        padding: 9px 13px;
        text-align: center;
    }

    #networks .item-3 {
        background-color: #d4d1d1;
        color: white;
        padding: 9px 13px;
        text-align: center;
    }

    #networks .item-4 {
        background-color: #d4d1d1;
        color: white;
        padding: 9px 13px;
        text-align: center;
        border-bottom-left-radius: 7px;

    }

    #networks .item-5 {
        background-color: #219239;
        color: white;
        padding: 9px 13px;
        text-align: center;

    }

    #networks .item-6 {
        background-color: #405DE6;
        color: white;
        padding: 9px 13px;
        text-align: center;
        border-bottom-left-radius: 7px;
    }

    #networks img,
    #networks p {
        transition: transform 0.3s ease;
        /* animación suave */
    }

    #networks a:hover img,
    #networks a:hover p {
        transform: scale(1.1);
        /* zoom al pasar el cursor */
    }

    #networks img,
    #networks p {
        transform-origin: center;
        /* el zoom saldrá desde el centro */
    }


    @media screen and (max-width:600px) {

        #networks {
            display: none;
        }


    }
</style>

<section id="networks">
    <div class="list d-flex flex-column">
        <a href="https://forms.gle/T2LExpHKEmM5pviq9" class="item-1" target="_blank">
            <img src="./public/img/icons/libro-reclamaciones.png" alt="" style="width:60%"><br>
            <p style="font-size: .6rem;color:#44444E;word-break: break-word;white-space: normal;">Libro de Reclamaciones</p>
        </a>
        <a href="https://iespprockefeller.cubicol.pe/intranet/gestion-documentos" class="item-2" target="_blank">
            <img src="./public/img/icons/mesa-partes.png" alt="" style="width:40%"><br>
            <p style="font-size: .6rem;color:#44444E;word-break: break-word;white-space: normal;">Mesa de Partes</p>
        </a>
        <a href="https://iespprockefeller.cubicol.pe/intranet/biblioteca-virtual" class="item-3" target="_blank">
            <img src="./public/img/icons/biblioteca-virtual.png" alt="" style="width:40%"><br>
            <p style="font-size: .6rem;color:#44444E;word-break: break-word;white-space: normal;">Biblioteca Virtual</p>
        </a>

        <a href="https://iespprockefeller.cubicol.pe/principal/login" target="_blank" class="item-4">
            <img src="./public/img/icons/cubo.png" height="28">
            <p class="pt-1" style="font-size: .6rem;color:#44444E;word-break: break-word;white-space: normal;">Intranet</p>
        </a>
    </div>

</section>
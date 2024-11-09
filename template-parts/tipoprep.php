<div class="container py-3">
    <div class="text-center">
        <h3 class="card-text-title">BÚSQUEDA POR TIPO DE PREPARACIÓN</h3>
    </div>
    <div class="container-fluid py-2 pt-2">
        <div class="row gx-4 justify-content-center">
            <div class="card-tipop col-auto pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/etiqueta-producto/parrilla')); ?>" class="text-decoration-none">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/fuego.png" class="card-img-top" alt="parrilla">
                    <h6 class="card-text text-center mt-2">parrilla</h6>

                </a>
            </div>
            <div class="card-tipop col-auto pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/etiqueta-producto/olla')); ?>" class="text-decoration-none">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/olla.png" class="card-img-top" alt="parrilla">
                    <h6 class="card-text text-center mt-2">olla</h6>

                </a>
            </div>
            <div class="card-tipop col-auto pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/etiqueta-producto/pucheros')); ?>" class="text-decoration-none">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/ollapuch.png" class="card-img-top" alt="parrilla">
                    <h6 class="card-text text-center mt-2">puchero</h6>

                </a>
            </div>
            <div class="card-tipop col-auto pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/etiqueta-producto/plancha')); ?>" class="text-decoration-none">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/sarten.png" class="card-img-top" alt="parrilla">
                    <h6 class="card-text text-center mt-2">plancha</h6>

                </a>
            </div>
            <div class="card-tipop col-auto pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/etiqueta-producto/horno')); ?>" class="text-decoration-none">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/horno.png" class="card-img-top" alt="parrilla">
                    <h6 class="card-text text-center mt-2">horno</h6>

                </a>
            </div>
            <div class="card-tipop col-auto pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/etiqueta-producto/salteados')); ?>" class="text-decoration-none">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/wok.png" class="card-img-top" alt="parrilla">
                    <h6 class="card-text text-center mt-2">salteados</h6>

                </a>
            </div>
            <div class="card-tipop col-auto pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/etiqueta-producto/milanesas')); ?>" class="text-decoration-none">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/milapapa.png" class="card-img-top" alt="parrilla">
                    <h6 class="card-text text-center mt-2">milanesas</h6>

                </a>
            </div>
            <div class="card-tipop col-auto pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/etiqueta-producto/picada')); ?>" class="text-decoration-none">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/picadora.png" class="card-img-top" alt="parrilla">
                    <h6 class="card-text text-center mt-2">picada</h6>

                </a>
            </div>
            <div class="card-tipop col-auto pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/etiqueta-producto/huesos')); ?>" class="text-decoration-none">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/huesos.png" class="card-img-top" alt="parrilla">
                    <h6 class="card-text text-center mt-2">huesos</h6>

                </a>
            </div>

        </div>
    </div>

    <hr class="border">
</div>

<style>
    .card-text-title {
        position: relative;
        display: inline-block;
        /* Asegura que el ancho del subrayado se ajuste al texto */
        font-weight: 600;
        font-size: 3rem;
    }

    /* Estilos para pantallas pequeñas */
    @media (max-width: 768px) {
        .card-text-title {
            font-size: 1.6rem;
            /* Tamaño reducido para pantallas pequeñas */
        }
    }

    /* Estilos para pantallas muy pequeñas (por ejemplo, móviles) */
    @media (max-width: 480px) {
        .card-text-title {
            font-size: 1.4rem;
            /* Tamaño aún más reducido para pantallas muy pequeñas */
        }
    }

    .card-text-title::after {
        content: "";
        position: absolute;

        left: 5px;
        width: 100%;
        /* Hace que la línea coincida con el ancho del texto */
        height: 1.2rem;
        /* Ajusta el grosor de la línea */
        background-color: #FFD700;
        /* Cambia el color al que prefieras */
        z-index: -1;
        /* Coloca la línea detrás del texto */
        transform: translateY(20px);
        /* Ajusta la posición vertical de la línea */
    }
</style>
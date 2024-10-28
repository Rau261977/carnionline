<div class="container py-3 justify-content-center">
    <div class="d-flex justify-content-center align-items-center">
        <h3 class="card-text-title text-center mt-2">BÚSQUEDA POR TIPO DE PREPARACIÓN</h3>
    </div>
    <div class="container-fluid py-2 pt-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-auto">
                <div class="card grow" style="width: 100px; height: 120px">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/fuego.png" class="card-img-top" alt="aves">
                        <h6 class="card-text text-center mt-2">parrilla</h6>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="card grow" style="width: 100px; height: 120px">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/olla.png" class="card-img-top" alt=" cerdo">
                        <h6 class="card-text text-center mt-2">olla</h6>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="card grow" style="width: 100px; height: 120px">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/ollapuch.png" alt="carne">
                        <h6 class="card-text mt-2">pucheros</h6>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="card grow" style="width: 100px; height: 120px">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/sarten.png" alt="preelaborados">
                        <h6 class="card-text  mt-2">plancha</h6>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="card grow" style="width: 100px; height: 120px">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/horno.png" alt="embutidos">
                        <h6 class="card-text mt-2">horno</h6>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="card grow" style="width: 100px; height: 120px">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/wok.png" alt="varios">
                        <h6 class="card-text text-center mt-2">salteados</h6>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="card grow" style="width: 100px; height: 120px">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/tipoprep/milapapa.png" alt="varios">
                        <h6 class="card-text text-center mt-2">milanesas</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr class="border">
</div>

<style>
    h3.card-text {
        color: #333;
        letter-spacing: 1.2px;
        font-weight: 600;
        font-size: 2rem;
    }

    h6.card-text {
        color: #222;
        letter-spacing: 1.2px;
        font-weight: 500;
        font-size: 1rem;
    }

    .card-text-title {
        position: relative;
        display: inline-block;
        /* Asegura que el ancho del subrayado se ajuste al texto */
        font-weight: 600;
        font-size: 2.2rem;
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
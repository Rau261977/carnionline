<div class="container fixed-category px-2 pb-3 pt-3">
    <!-- Primera fila -->
    <div class="row gx-2 justify-content-center pt-3">
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/pollo')); ?>" class="text-decoration-none">
                <div class="card grow">
                    <div class="card-body custom-card d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2024/10/aves.png'); ?>" class="card-img-top" alt="aves">
                        <h6 class="hover-title">avícola</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/cerdo')); ?>" class="text-decoration-none">
                <div class="card grow">
                    <div class="card-body custom-card d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2024/10/cerdo.png'); ?>" class="card-img-top" alt="cerdo">
                        <h6 class="hover-title">cerdo</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/vaca')); ?>" class="text-decoration-none">
                <div class="card grow">
                    <div class="card-body custom-card d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2024/10/vaca.png'); ?>" class="card-img-top" alt="vaca">
                        <h6 class="hover-title">vaca</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/mayorista')); ?>" class="text-decoration-none">
                <div class="card grow">
                    <div class="card-body custom-card d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2024/10/mediares.png'); ?>" class="card-img-top" alt="mayorista">
                        <h6 class="hover-title">mayorista</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/elaborados')); ?>" class="text-decoration-none">
                <div class="card grow">
                    <div class="card-body custom-card d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2024/10/hamb.png'); ?>" class="card-img-top" alt="elaborados">
                        <h6 class="hover-title">elaborados</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Segunda fila -->
    <div class="row gx-2 justify-content-center">
        <div class="col-auto pt-2">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/embutidos')); ?>" class="text-decoration-none">
                <div class="card grow">
                    <div class="card-body custom-card d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2024/10/embutidos.png'); ?>" class="card-img-top" alt="embutidos">
                        <h6 class="hover-title">embutidos</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-auto pt-2">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/varios')); ?>" class="text-decoration-none">
                <div class="card grow">
                    <div class="card-body custom-card d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2024/10/varios.png'); ?>" class="card-img-top" alt="varios">
                        <h6 class="hover-title">varios</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-auto pt-2">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/achuras')); ?>" class="text-decoration-none">
                <div class="card grow">
                    <div class="card-body custom-card d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2024/10/achuras.png'); ?>" class="card-img-top" alt="achuras">
                        <h6 class="hover-title">achuras</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-auto pt-2">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/ofertas')); ?>" class="text-decoration-none">
                <div class="card grow">
                    <div class="card-body custom-card d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2024/11/ofertas.png'); ?>" class="card-img-top" alt="ofertas">
                        <h6 class="hover-title">ofertas</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-auto pt-2">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/combos')); ?>" class="text-decoration-none">
                <div class="card grow">
                    <div class="card-body custom-card d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2024/10/combos.png'); ?>" class="card-img-top" alt="combos">
                        <h6 class="hover-title">combos</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>


<style>
    .fixed-category {
        position: fixed;
        background-color: #000;

    }

    .grow {
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        max-width: 6.2rem;
    }

    .grow:hover {
        transform: translateY(15px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        border-color: #333;
        background-color: white;
        /*#FFCA02*/
        width: 4.7rem;
        border-radius: 8px;
    }

    .custom-card {
        width: 4.5rem;
        padding: 3px;
    }

    .custom-card h6 {
        font-size: 10px;
    }

    .card-body .hover-title {
        display: none;
        /* Oculta el título por defecto */
        font-size: 1rem;
        color: #000;
        margin-top: 2px;
    }

    .card-body:hover .hover-title {
        display: block;
        /* Muestra el título en hover */
    }
</style>
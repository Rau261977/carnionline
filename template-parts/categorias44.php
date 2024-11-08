<div class="fixed-category">
    <div class="container px-2 pb-3 pt-3">
        <div class="d-flex justify-content-center align-items-center">
            <h3 class="card-text-title text-center mt-2">BÚSQUEDA POR CATEGORÍA</h3>
        </div>
        <div class="col gx-4 justify-content-center pt-3 pb-3">


            <div class="row pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/pollo')); ?>" class="text-decoration-none">
                    <div class="card grow column">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <?php
                            $upload_dir = wp_upload_dir();
                            $image_url = $upload_dir['baseurl'] . '/2024/10/aves.png';
                            ?>
                            <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">

                            <h6 class="card-text text-center mt-2">avícola</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/cerdo')); ?>" class="text-decoration-none">
                    <div class="card grow column">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <?php
                            $upload_dir = wp_upload_dir(); // Obtiene información de la carpeta de uploads
                            $image_url = $upload_dir['baseurl'] . '/2024/10/cerdo.png';
                            ?>
                            <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                            <h6 class="card-text text-center mt-2">cerdo</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/vaca')); ?>" class="text-decoration-none">
                    <div class="card grow column">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <?php
                            $upload_dir = wp_upload_dir();
                            $image_url = $upload_dir['baseurl'] . '/2024/10/vaca.png';
                            ?>
                            <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                            <h6 class="card-text text-center mt-2">vaca</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/mayorista')); ?>" class="text-decoration-none">
                    <div class="card grow column">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <?php
                            $upload_dir = wp_upload_dir();
                            $image_url = $upload_dir['baseurl'] . '/2024/10/mediares.png';
                            ?>
                            <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                            <h6 class="card-text text-center mt-2">mayorista</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/elaborados')); ?>" class="text-decoration-none">
                    <div class="card grow column">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <?php
                            $upload_dir = wp_upload_dir();
                            $image_url = $upload_dir['baseurl'] . '/2024/10/hamb.png';
                            ?>
                            <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                            <h6 class="card-text text-center mt-2">elaborados</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/embutidos')); ?>" class="text-decoration-none">
                    <div class="card grow column">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <?php
                            $upload_dir = wp_upload_dir();
                            $image_url = $upload_dir['baseurl'] . '/2024/10/embutidos.png';
                            ?>
                            <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                            <h6 class="card-text text-center mt-2">embutidos</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/varios')); ?>" class="text-decoration-none">
                    <div class="card grow column">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <?php
                            $upload_dir = wp_upload_dir();
                            $image_url = $upload_dir['baseurl'] . '/2024/10/varios.png';
                            ?>
                            <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                            <h6 class="card-text text-center mt-2">varios</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/achuras')); ?>" class="text-decoration-none">
                    <div class="card grow column">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <?php
                            $upload_dir = wp_upload_dir();
                            $image_url = $upload_dir['baseurl'] . '/2024/10/achuras.png';
                            ?>
                            <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                            <h6 class="card-text text-center mt-2">achuras</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/ofertas')); ?>" class="text-decoration-none">
                    <div class="card grow column">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <?php
                            $upload_dir = wp_upload_dir();
                            $image_url = $upload_dir['baseurl'] . '/2024/11/ofertas.png';
                            ?>
                            <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                            <h6 class="card-text text-center mt-2">ofertas</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row pt-3">
                <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/combos')); ?>" class="text-decoration-none">
                    <div class="card grow column">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <?php
                            $upload_dir = wp_upload_dir();
                            $image_url = $upload_dir['baseurl'] . '/2024/10/combos.png';
                            ?>
                            <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                            <h6 class="card-text text-center mt-2">combos</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <hr class="border">
</div>
<style>
    .grow {
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        max-width: 6.2rem;
    }

    .grow:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        border-color: rgba(0, 0, 0, 0.2);
    }

    .fixed-category {
        position: fixed;
        right: 20px;
        /* Ajusta el margen desde el borde derecho */
        top: 50%;
        transform: translateY(-50%);
        z-index: 1000;
        width: 10rem;
        /* Ajusta el ancho según tus necesidades */
    }

    .fixed-category .card-img-top {
        max-width: 50%;
    }


    .fixed-category .card-body .card-img-top,
    .fixed-category .card-body h6.card-text {
        color: #222;
        letter-spacing: 1.2px;
        font-weight: 400;
        font-size: 0.8rem;

    }

    .card-text:last-child {
        margin-bottom: 0.5rem !important;
        /* Ajusta el valor según lo que necesites */
    }


    .fixed-category .card-body {
        padding: 0px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.4);
    }
</style>
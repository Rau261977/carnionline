<div class="container px-2 pb-3 pt-3">
    <hr class="border">
    <div class="d-flex justify-content-center align-items-center">
        <h3 class="card-text-title text-center mt-2">BÚSQUEDA POR CATEGORÍA</h3>
    </div>
    <div class="row gx-4 justify-content-center pt-3 pb-3">

        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/pollo')); ?>" class="text-decoration-none">
                <div class="card grow">
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
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/cerdo')); ?>" class="text-decoration-none">
                <div class="card grow">
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
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/vaca')); ?>" class="text-decoration-none">
                <div class="card grow">
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
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/mayorista')); ?>" class="text-decoration-none">
                <div class="card grow">
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
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/elaborados')); ?>" class="text-decoration-none">
                <div class="card grow">
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
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/embutidos')); ?>" class="text-decoration-none">
                <div class="card grow">
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
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/varios')); ?>" class="text-decoration-none">
                <div class="card grow">
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
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/achuras')); ?>" class="text-decoration-none">
                <div class="card grow">
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
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/ofertas')); ?>" class="text-decoration-none">
                <div class="card grow">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <?php
                        $upload_dir = wp_upload_dir();
                        $image_url = $upload_dir['baseurl'] . '/2024/10/ofertas.png';
                        ?>
                        <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                        <h6 class="card-text text-center mt-2">ofertas</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-auto pt-3">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/combos')); ?>" class="text-decoration-none">
                <div class="card grow">
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
    <hr class="border">

</div>

<style>
    .grow {
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        max-width: 6.2rem;
    }

    .grow:hover {
        transform: translateY(-5px);
        /* Eleva la tarjeta */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        /* Agrega una sombra */
        border-color: rgba(0, 0, 0, 0.2);
        /* Oscurece el borde */
    }
</style>
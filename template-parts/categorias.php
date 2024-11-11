<div class="col-md-8">


    <div class="row gx-1 justify-content-center">

        <div class="col-auto pt-1 pb-1">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/pollo')); ?>" class="text-decoration-none">
                <div class="custom-card">

                    <?php
                    $upload_dir = wp_upload_dir();
                    $image_url = $upload_dir['baseurl'] . '/2024/11/aves.png';
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">

                    <h6 class="hover-title">avícola</h6>
                </div>
            </a>
        </div>


        <div class="col-auto pt-1 pb-1">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/cerdo')); ?>" class="text-decoration-none">
                <div class="custom-card">

                    <?php
                    $upload_dir = wp_upload_dir(); // Obtiene información de la carpeta de uploads
                    $image_url = $upload_dir['baseurl'] . '/2024/11/cerdo.png';
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                    <h6 class="hover-title">cerdo</h6>
                </div>
            </a>
        </div>
        <div class="col-auto pt-1 pb-1">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/carne-vacuna')); ?>" class="text-decoration-none">
                <div class="custom-card">

                    <?php
                    $upload_dir = wp_upload_dir();
                    $image_url = $upload_dir['baseurl'] . '/2024/11/vaca.png';
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                    <h6 class="hover-title">vaca</h6>
                </div>
            </a>
        </div>
        <div class="col-auto pt-1 pb-1">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/mayorista')); ?>" class="text-decoration-none">
                <div class="custom-card">

                    <?php
                    $upload_dir = wp_upload_dir();
                    $image_url = $upload_dir['baseurl'] . '/2024/10/mediares.png';
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                    <h6 class="hover-title">mayorista</h6>
                </div>
            </a>
        </div>
        <div class="col-auto pt-1 pb-1">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/elaborados')); ?>" class="text-decoration-none">
                <div class="custom-card">

                    <?php
                    $upload_dir = wp_upload_dir();
                    $image_url = $upload_dir['baseurl'] . '/2024/11/hamb.png';
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                    <h6 class="hover-title">elaborados</h6>
                </div>
            </a>
        </div>
        <div class="col-auto pt-1 pb-1">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/embutidos')); ?>" class="text-decoration-none">
                <div class="custom-card">

                    <?php
                    $upload_dir = wp_upload_dir();
                    $image_url = $upload_dir['baseurl'] . '/2024/10/embutidos.png';
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                    <h6 class="hover-title">embutidos</h6>
                </div>
            </a>
        </div>
        <div class="col-auto pt-1 pb-1">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/varios')); ?>" class="text-decoration-none">
                <div class="custom-card">

                    <?php
                    $upload_dir = wp_upload_dir();
                    $image_url = $upload_dir['baseurl'] . '/2024/10/varios.png';
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                    <h6 class="hover-title">varios</h6>
                </div>
            </a>
        </div>
        <div class="col-auto pt-1 pb-1">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/achuras')); ?>" class="text-decoration-none">
                <div class="custom-card">

                    <?php
                    $upload_dir = wp_upload_dir();
                    $image_url = $upload_dir['baseurl'] . '/2024/10/achuras.png';
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                    <h6 class="hover-title">achuras</h6>
                </div>
            </a>
        </div>
        <div class="col-auto pt-1 pb-1">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/ofertas')); ?>" class="text-decoration-none">
                <div class="custom-card">

                    <?php
                    $upload_dir = wp_upload_dir();
                    $image_url = $upload_dir['baseurl'] . '/2024/11/ofertas.png';
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                    <h6 class="hover-title">ofertas</h6>
                </div>
            </a>
        </div>
        <div class="col-auto pt-1 pb-1">
            <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/combos')); ?>" class="text-decoration-none">
                <div class="custom-card">

                    <?php
                    $upload_dir = wp_upload_dir();
                    $image_url = $upload_dir['baseurl'] . '/2024/11/combos.png';
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="aves">
                    <h6 class="hover-title">combos</h6>
                </div>
            </a>
        </div>
        <div class="col-auto">
            <?php if (function_exists('aws_get_search_form')) {
                aws_get_search_form();
            } ?>
        </div>

    </div>

</div>
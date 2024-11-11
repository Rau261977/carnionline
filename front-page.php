<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Carni_On-Line
 */

get_header();
?>
<main id="primary" class="site-main">
    <section>
        <?php
        // Incluir el slider destacados
        get_template_part('template-parts/carousel');
        ?>
    </section>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Accordion Item #1
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
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
                </div>
            </div>
        </div>

    </div>
    <section>
        <?php
        // Incluir el slider destacados
        get_template_part('template-parts/marquee');
        ?>
    </section>
    <section>
        <?php
        // Incluir el slider destacados
        get_template_part('template-parts/tipoprep');
        ?>
    </section>
    <section>
        <?php
        // Incluir el slider destacados
        get_template_part('template-parts/section-a');
        ?>
    </section>
    <section>
    </section>
    <section>
        <?php
        // Incluir el slider destacados
        get_template_part('template-parts/destacados');
        ?>
    </section>
    <section>
        <?php
        // Incluir el slider destacados
        get_template_part('template-parts/product-container');
        ?>
    </section>
    <section>
        <?php
        // Incluir el slider destacados
        get_template_part('template-parts/fotos');
        ?>
    </section>

</main><!-- #main -->

<?php

get_footer();

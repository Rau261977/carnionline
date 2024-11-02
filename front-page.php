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
    <div class="scroll-image" style="display: none;">
        <img src="<?php echo get_template_directory_uri(); ?>/img/mariopng.png" alt="Imagen al hacer scroll" />
    </div>

    <section>

        <?php
        // Incluir el slider destacados
        get_template_part('template-parts/carousel');
        ?>


    </section>
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

        <?php
        // Incluir el slider destacados
        get_template_part('template-parts/categorias');
        ?>


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

</main><!-- #main -->

<?php

get_footer();

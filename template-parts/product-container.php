<div class="container">
    <?php
    // Consulta para obtener los últimos 6 productos de la categoría "carne-vacuna"
    $args_carne = array(
        'post_type' => 'product',
        'posts_per_page' => 6,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'carne-vacuna',
            ),
        ),
    );

    $query_carne = new WP_Query($args_carne);

    if ($query_carne->have_posts()) : ?>
        <div class="productos-carne-vacuna">
            <?php while ($query_carne->have_posts()) : $query_carne->the_post(); ?>
                <div class="product">
                    <a href="<?php the_permalink(); ?>">
                        <?php woocommerce_show_product_sale_flash(); ?>
                        <?php the_post_thumbnail('medium'); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php woocommerce_template_loop_price(); ?>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif;
    wp_reset_postdata(); ?>

    <?php
    // Consulta para obtener los últimos 6 productos de la categoría "cerdo"
    $args_cerdo = array(
        'post_type' => 'product',
        'posts_per_page' => 6,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'cerdo',
            ),
        ),
    );

    $query_cerdo = new WP_Query($args_cerdo);

    if ($query_cerdo->have_posts()) : ?>
        <div class="productos-cerdo">
            <?php while ($query_cerdo->have_posts()) : $query_cerdo->the_post(); ?>
                <div class="product">
                    <a href="<?php the_permalink(); ?>">
                        <?php woocommerce_show_product_sale_flash(); ?>
                        <?php the_post_thumbnail('medium'); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php woocommerce_template_loop_price(); ?>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif;
    wp_reset_postdata(); ?>

    <?php
    // Consulta para obtener los últimos 6 productos de la categoría "pollo"
    $args_pollo = array(
        'post_type' => 'product',
        'posts_per_page' => 3,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'pollo',
            ),
        ),
    );

    $query_pollo = new WP_Query($args_pollo);

    // Consulta para obtener los últimos 3 productos de la categoría "embutidos"
    $args_embutidos = array(
        'post_type' => 'product',
        'posts_per_page' => 3,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'embutidos',
            ),
        ),
    );

    $query_embutidos = new WP_Query($args_embutidos);

    if ($query_pollo->have_posts() || $query_embutidos->have_posts()) : ?>
        <div class="productos-pollo-embutidos">
            <?php
            // Mostrar productos de la categoría "pollo"
            while ($query_pollo->have_posts()) : $query_pollo->the_post(); ?>
                <div class="product">
                    <a href="<?php the_permalink(); ?>">
                        <?php woocommerce_show_product_sale_flash(); ?>
                        <?php the_post_thumbnail('medium'); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php woocommerce_template_loop_price(); ?>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_postdata();

            // Mostrar productos de la categoría "embutidos"
            while ($query_embutidos->have_posts()) : $query_embutidos->the_post(); ?>
                <div class="product">
                    <a href="<?php the_permalink(); ?>">
                        <?php woocommerce_show_product_sale_flash(); ?>
                        <?php the_post_thumbnail('medium'); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php woocommerce_template_loop_price(); ?>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    <?php endif; ?>
</div>
<style>
    .productos-carne-vacuna,
    .productos-cerdo,
    .productos-pollo,
    .productos-embutidos {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: space-between;
        margin-bottom: 2rem;
    }

    .product {
        flex: 1 1 calc(16.66% - 1rem);
        /* 6 productos por fila en pantallas grandes */
        box-sizing: border-box;
    }

    .product img {
        width: 100%;
        height: auto;
    }

    @media (max-width: 1024px) {
        .product {
            flex: 1 1 calc(25% - 1rem);
            /* 4 productos por fila en tabletas */
        }
    }

    @media (max-width: 768px) {
        .product {
            flex: 1 1 calc(33.33% - 1rem);
            /* 3 productos por fila en pantallas medianas */
        }
    }

    @media (max-width: 480px) {
        .product {
            flex: 1 1 calc(50% - 1rem);
            /* 2 productos por fila en pantallas de celular */
        }
    }

    .productos-pollo-embutidos {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: space-between;
        margin-bottom: 2rem;
    }

    .productos-pollo-embutidos .product {
        flex: 1 1 calc(16.66% - 1rem);
        /* Para mostrar 6 productos por fila */
        box-sizing: border-box;
    }

    @media (max-width: 1024px) {
        .productos-pollo-embutidos .product {
            flex: 1 1 calc(25% - 1rem);
            /* 4 productos por fila en tabletas */
        }
    }

    @media (max-width: 768px) {
        .productos-pollo-embutidos .product {
            flex: 1 1 calc(33.33% - 1rem);
            /* 3 productos por fila en pantallas medianas */
        }
    }

    @media (max-width: 480px) {
        .productos-pollo-embutidos .product {
            flex: 1 1 calc(50% - 1rem);
            /* 2 productos por fila en pantallas de celular */
        }
    }
</style>
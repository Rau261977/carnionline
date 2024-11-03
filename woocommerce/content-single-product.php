<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div class="single-product-wrapper">
    <!-- Contenedor principal del producto -->
    <div class="product-content-container">
        <div class="product-image">
            <?php woocommerce_show_product_images(); // Muestra la imagen del producto 
            ?>
        </div>

        <div class="product-details">
            <h1 class="product-title"><?php the_title(); ?></h1>

            <div class="product-description">
                <?php the_content(); // Muestra la descripción del producto 
                ?>
            </div>

            <div class="price">
                <?php woocommerce_template_single_price(); ?>
            </div>


            <div class="add-to-cart">
                <?php woocommerce_template_single_add_to_cart(); ?>
            </div>
        </div>
    </div>

    <!-- Productos relacionados -->
    <div class="related-products">
        <?php woocommerce_output_related_products(); // Muestra los productos relacionados 
        ?>
    </div>
</div>


<?php do_action('woocommerce_after_single_product'); ?>
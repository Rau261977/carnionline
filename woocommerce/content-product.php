<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */


defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || ! $product->is_visible()) {
    return;
}
?>
<li <?php wc_product_class('', $product); ?>>
    <?php
    // Hook: woocommerce_before_shop_loop_item.
    do_action('woocommerce_before_shop_loop_item');

    // Envoltorio de imagen
    echo '<div class="product-image-wrapper">';
    do_action('woocommerce_before_shop_loop_item_title');
    // Línea debajo de la imagen
    echo '<div class="product-image-border"></div>'; // Esta es la línea que se agregará debajo de la imagen
    echo '</div>';

    // Título del producto
    do_action('woocommerce_shop_loop_item_title');

    // Etiquetas del producto
    echo '<div class="product-tags">';
    echo wc_get_product_tag_list($product->get_id(), ', ', '<span class="tag-list">', '</span>');
    echo '</div>';

    // Precio y otros detalles debajo del título
    do_action('woocommerce_after_shop_loop_item_title');

    // Contenedor para el botón y la cantidad
    echo '<div class="add-to-cart-wrapper d-flex align-items-center">';

    // Campo de cantidad
    echo '<div class="quantity me-2">'; // Agrega un margen derecho para separar del botón
    echo '<label class="screen-reader-text" for="quantity_' . esc_attr($product->get_id()) . '">Cantidad</label>';
    echo '<input type="number" id="quantity_' . esc_attr($product->get_id()) . '" class="input-text qty text" name="quantity" value="1" aria-label="Cantidad de productos" size="4" min="1" step="1" placeholder="" inputmode="numeric" autocomplete="off">';
    echo '</div>';

    // Botón de añadir al carrito
    do_action('woocommerce_after_shop_loop_item');

    echo '</div>'; // Cierra el contenedor
    ?>
</li>
<div class="image-section-fotos">
    <img src="<?php echo get_template_directory_uri(); ?>//img/fotos/uno.jpg" alt="Imagen 1">
    <img src="<?php echo get_template_directory_uri(); ?>//img/fotos/dos.jpg" alt="Imagen 1">
    <img src="<?php echo get_template_directory_uri(); ?>//img/fotos/tres.jpg" alt="Imagen 1">
    <img src="<?php echo get_template_directory_uri(); ?>//img/fotos/cuatro.jpg" alt="Imagen 1">
</div>



<style>
    .image-section-fotos {
        display: flex;
        gap: 3px;
        /* Espacio entre imágenes */
        justify-content: center;
        /* Centra las imágenes horizontalmente */
        align-items: center;
        /* Centra las imágenes verticalmente */
        margin: 3rem 0;
        width: 100%;
    }

    .image-section-fotos img {
        width: 330px;
        /* Ajusta el ancho de cada imagen */
        height: auto;
    }
</style>
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
        justify-content: center;
        align-items: center;
        margin: 3rem 0;
        width: 100%;
        flex-wrap: wrap;
        /* Permite que las imágenes pasen a la siguiente línea si no caben */
    }

    .image-section-fotos img {
        width: 330px;
        height: auto;
    }

    /* Ajustes para pantallas extra pequeñas */
    @media (max-width: 576px) {
        .image-section-fotos img {
            width: 100%;
            /* Ocupa el ancho completo del contenedor */
            max-width: 150px;
            /* Tamaño máximo de cada imagen en pantallas XS */
            margin: 2px;
            /* Espacio entre imágenes */
        }
    }
</style>
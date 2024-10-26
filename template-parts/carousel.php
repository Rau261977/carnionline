<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <!-- Imagen fija en el centro del carrusel -->
    <img src="<?php echo get_template_directory_uri(); ?>/img/mariopng.png" class="fixed-logo" alt="Carnicería Mario">

    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/asados1.jpg" loading="lazy" class="d-block w-100" alt="imagen promocional del slider">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/cerdos3.jpg" loading="lazy" class="d-block w-100" alt="imagen promocional del slider">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/chori2.jpg" loading="lazy" class="d-block w-100" alt="imagen promocional del slider">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<style>
    /* Estilo solo para el icono de la flecha del control */
    #carouselExampleAutoplaying .carousel-control-prev-icon,
    #carouselExampleAutoplaying .carousel-control-next-icon {
        background-color: rgb(41, 147, 182);
        /* Cambia el fondo del icono de la flecha */
        border-radius: 50%;
        /* Hace que el fondo del icono sea circular */
        width: 2.5rem;
        /* Ajusta el tamaño del fondo */
        height: 2.5rem;
        /* Ajusta el tamaño del fondo */
        background-size: 1rem 1rem;
        /* Tamaño de la flecha dentro del círculo */
        background-position: center;
        /* Asegura que la flecha esté centrada */
    }

    #carouselExampleAutoplaying .carousel-control-prev {
        left: -40px;
        /* Mueve el control izquierdo más hacia la izquierda */
    }

    #carouselExampleAutoplaying .carousel-control-next {
        right: -40px;
        /* Mueve el control derecho más hacia la derecha */
    }

    #carouselExampleAutoplaying .carousel-item img {
        max-height: 400px;
        /* Ajusta la altura máxima según tus necesidades */
        object-fit: cover;
        /* Hace que la imagen se recorte para llenar el contenedor sin deformarse */
        width: 100%;
        /* Asegura que la imagen cubra toda la anchura */
    }

    .fixed-logo {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 25%;
        max-width: 25%;
        z-index: 10;
        /* Asegura que esté sobre las imágenes del carrusel */
        pointer-events: none;
        /* Evita que el cursor interactúe con esta imagen */
    }
</style>
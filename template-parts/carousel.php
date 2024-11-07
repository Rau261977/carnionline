<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <!-- Imagen fija en el centro del carrusel -->
    <img src="<?php echo get_template_directory_uri(); ?>/img/mariopng.png" class="fixed-logo" alt="Carnicería Mario">

    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/asados1.jpg" loading="lazy" class="d-block w-100" alt="imagen promocional del slider">
            <div class="carousel-card">
                <h2>NOVILLITO Y TERNERA DE 1RA CALIDAD</h2>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/cerdos3.jpg" loading="lazy" class="d-block w-100" alt="imagen promocional del slider">
            <div class="carousel-card">
                <h2 style="margin-left: 15px;">CORTES DE CERDO ESPECIALES </h2>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/chori2.jpg" loading="lazy" class="d-block w-100" alt="imagen promocional del slider">
            <div class="carousel-card">
                <h2>EMBUTIDOS FRESCOS ARTESANALES</h2>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/pollo.jpg" loading="lazy" class="d-block w-100" alt="imagen promocional del slider">
            <div class="carousel-card">
                <h2>POLLOS, HUEVOS <br>Y PRODUCTOS<br> DE GRANJA</h2>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/hamb.jpg" loading="lazy" class="d-block w-100" alt="imagen promocional del slider">
            <div class="carousel-card">
                <h2>MILANESAS y<br>HAMBURGUESAS CASERAS</h2>
            </div>
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
        background-color: #ffca00;
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
        align-items: baseline;
        top: 50%;
        left: 30%;
        transform: translate(-50%, -50%);
        width: 25%;
        max-width: 25%;
        z-index: 10;
        /* Asegura que esté sobre las imágenes del carrusel */
        pointer-events: none;
        /* Evita que el cursor interactúe con esta imagen */
    }

    .carousel-item {
        position: relative;
    }

    .carousel-item.active .carousel-card {
        opacity: 1;
        /* Muestra la card cuando el item está activo */
    }


    .carousel-card {
        position: absolute;
        top: 50%;
        left: 70%;
        /* Ajusta este valor para desplazar la card hacia la derecha */
        transform: translate(-50%, -50%);
        width: 440px;
        max-width: 90%;
        /* Para que se ajuste en pantallas pequeñas */
        height: 250px;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.4);
        /* Fondo semi-transparente */
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(173, 15, 10, 0.3);
        opacity: 0;
        /* Comienza oculto */
        transition: opacity 0.5s ease;
        /* Tiempo de transición */
    }

    .carousel-card h2 {
        font-size: 4rem;
        margin-bottom: 20px;
        font-family: veneer;
        color: #ad0f0a;
        letter-spacing: 2px;
    }

    @media (max-width: 576px) {
        .carousel-card h2 {
            font-size: 1.3rem;
        }
    }

    .carousel-card p {
        font-size: 1rem;
        margin: 0;
    }

    /* Ajustes para pantallas pequeñas */
    @media (max-width: 576px) {
        .carousel-card {
            width: 180px;
            right: 50%;
            padding: 10px;
            height: 90px;
        }
    }
</style>
<section class="destacados">
    <div class="d-flex justify-content-center align-items-center">
        <h3 class="card-text-title text-center">PROMOCIONES DE LA SEMANA</h3>
    </div>
    <div class="destacado-track pt-4">
        <?php
        // Definir los productos en un array
        $productos = [
            [
                'titulo' => 'SUPREMAS',
                'precio' => '10,000',
                'peso' => '5 kg',
                'imagen' => 'pechugas.png',
            ],
            [
                'titulo' => 'CHORIZOS x gancho',
                'precio' => '5,000',
                'peso' => '',
                'imagen' => 'chorizos.png',
            ],
            [
                'titulo' => 'PECHITO de cerdo',
                'precio' => '5,000',
                'peso' => '3 kg',
                'imagen' => 'pechito.png',
            ],
            [
                'titulo' => 'ENTRAÑAS',
                'precio' => '5,000',
                'peso' => '2 kg',
                'imagen' => 'entranas.png',
            ],
            [
                'titulo' => 'HUEVOS',
                'precio' => '6,000',
                'peso' => 'maple',
                'imagen' => 'huevos.png',
            ],
            [
                'titulo' => 'VACIO ENTERO',
                'precio' => '5,000 x kg',
                'peso' => '',
                'imagen' => 'vacio.png',
            ],
            [
                'titulo' => 'POLLOS',
                'precio' => '70,000',
                'peso' => '5 kg',
                'imagen' => 'pollo.png',
            ],
            [
                'titulo' => 'BONDIOLA',
                'precio' => '6,000',
                'peso' => '3 kg',
                'imagen' => 'bondiola.png',
            ],
        ];

        // Obtener el directorio de carga
        $upload_dir = wp_upload_dir();

        // Obtener el enlace a la categoría "ofertas"
        $ofertas_link = esc_url(get_term_link('ofertas', 'product_cat'));

        // Generar las tarjetas de producto
        foreach ($productos as $producto) {
            $image_url = $upload_dir['baseurl'] . '/2024/10/' . $producto['imagen'];
        ?>
            <a href="<?php echo $ofertas_link; ?>" class="card destacado">
                <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="<?php echo esc_attr($producto['titulo']); ?>">
                <div class="card-body text-center">
                    <h5 class="card-title"><?php echo esc_html($producto['titulo']); ?></h5>
                </div>
                <div class="card-price text-center">
                    <p><?php echo esc_html($producto['peso'] . ' ' . $producto['precio']); ?></p>
                </div>
            </a>
        <?php
        }

        // Duplicar los elementos para un efecto de bucle continuo
        foreach ($productos as $producto) {
            $image_url = $upload_dir['baseurl'] . '/2024/10/' . $producto['imagen'];
        ?>
            <a href="<?php echo $ofertas_link; ?>" class="card destacado">
                <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="<?php echo esc_attr($producto['titulo']); ?>">
                <div class="card-body text-center">
                    <h5 class="card-title"><?php echo esc_html($producto['titulo']); ?></h5>
                </div>
                <div class="card-price text-center">
                    <p><?php echo esc_html($producto['peso'] . ' ' . $producto['precio']); ?></p>
                </div>
            </a>
        <?php
        }
        ?>
    </div>
</section>

<style>
    .destacados {
        /* Ajusta el alto del contenedor principal */
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 100%;
        /* Ancho total para flexibilidad */
    }

    .destacado-track {
        display: flex;
        width: calc(12rem * 16 + 10px * 16 * 2);
        /* Ajusta el cálculo del ancho total del track */
        animation: scroll 20s linear infinite;
        /* Ajusta el tiempo de la animación para suavizar el bucle */
    }

    .destacado .card-price {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        /* Alinea el contenido hacia el fondo */
        padding-bottom: 1px;
        /* Asegura que el `<p>` esté a 1px del borde inferior */
    }


    .card.destacado {
        background-color: white;
        width: 12rem;
        /* Cambia el ancho de las cards a 12rem */
        display: flex;
        flex-direction: column;
        /* Asegura que los contenidos de las cards estén en columna */
        align-items: center;
        justify-content: center;
        padding: 5px;
        /* Espacio alrededor del contenido de la card */
        box-sizing: border-box;
        /* Incluye padding en el tamaño total */
        border-radius: 8px;
        /* Bordes redondeados */
        margin: 0 10px;
        /* Espaciado entre las cards */
    }

    .card.destacado:hover {
        border-color: #333;
        /* Cambia el color del borde a un gris oscuro o cualquier color deseado */
    }

    .card.destacado img {
        width: 90%;
        height: auto;
        max-width: 90%;
        /* Limita el ancho máximo para mantener la imagen dentro de la card */
        /* Limita la altura máxima */
        object-fit: cover;
        /* Asegura que la imagen se ajuste bien dentro de su contenedor */
        margin-bottom: 4px;
        /* Espacio entre la imagen y el título */
    }

    .card-body.text-center {
        padding: 0px;
    }

    .card-title {
        font-size: 16px;
        margin: 0;
    }

    .card.destacado:hover .card-title {
        font-weight: bold;
    }


    .destacados:hover .destacado-track {
        animation-play-state: paused;
        /* Pausa la animación al pasar el mouse */
    }

    /* Animación continua */
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
            /* Ajusta el desplazamiento para reflejar el nuevo ancho */
        }
    }

    .destacados .destacado .card-title {
        font-size: 1rem;
        /* Ajusta el tamaño de fuente */
        color: #000;
        /* Cambia el color */
        font-weight: bold;
        /* Ajusta el grosor de la fuente */
        text-transform: uppercase;
        /* Cambia el texto a mayúsculas */
        letter-spacing: 1px;
        /* Ajusta el espacio entre letras */
    }

    .destacados .destacado p {
        font-size: 1.3rem;
        /* Ajusta el tamaño de fuente */
        color: #ffff;
        /* Cambia el color */
        font-weight: bold;
        /* Ajusta el grosor de la fuente */
        margin-top: 10px;
        /* Agrega margen si es necesario */
        text-transform: uppercase;
        /* Cambia el texto a mayúsculas */
        letter-spacing: 1px;
        /* Ajusta el espacio entre letras */
        background-color: rgba(173, 15, 10);
        border-radius: 5px;
        padding: 2px 7px;
    }
</style>
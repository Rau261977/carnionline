<div class="container py-3">
    <div class="row align-items-center"> <!-- Alinea el contenido verticalmente en el centro -->
        <div class="col-md-6 d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gustos.jpg" class="card-img-gus" alt="Imagen de gusto">
        </div>
        <div class="col-md-6">
            <p class="text-left custom-text">
                Visitanos o comprá por nuestra TIENDA ONLINE. Probá la increíble variedad de chorizos
                que elaboramos. Todos los días gran surtido de productos.
            </p>
        </div>
    </div>
</div>

<style>
    .card-img-gus {
        max-width: 100%;
        /* Para que ocupe siempre el ancho de su contenedor */
        height: auto;
    }

    .custom-text {
        font-family: veneer;
        font-weight: 600;
        color: #333;
        font-size: 3rem;
        letter-spacing: 1px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);


    }

    .card-img-gus {
        max-width: 100%;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
        /* Ajusta los valores para modificar la sombra */
        border-radius: 5px;
        /* Opcional: redondea ligeramente las esquinas */
    }
</style>
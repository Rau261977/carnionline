<section class="destacados pt-4 pb-2">
    <div class="marquee">
        <ul class="marquee__content">
            <li class="marquee__item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Probaste los nuevos chorizos? de cerdo ahumado y especiales de rockefort, exquisitos! no te los pierdas.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; </li>
            <li class="marquee__item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Envíos a domicilio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; </li>
            <li class="marquee__item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Todos los medio de pago&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; </li>
            <li class="marquee__item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grandes ofertas todas las semanas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull;</li>

            <!--  Repeated marquee items -->
            <li class="marquee__item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Probaste los nuevos chorizos? de cerdo ahumado y especiales de rockefort, exquisitos! no te los pierdas.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; </li>
            <li class="marquee__item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Envíos a domicilio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; </li>
            <li class="marquee__item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Todos los medio de pago&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; </li>
            <li class="marquee__item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grandes ofertas todas las semanas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull;</li>
        </ul>
    </div>
</section>



<style>
    .marquee {
        width: 100%;
        height: 50px;
        border-top: 1px solid gray;
        border-bottom: 1px solid gray;
        overflow: hidden;
        font-weight: 500;
        padding-top: 5px;
    }

    .marquee li {
        font-size: 1.5rem;
    }

    .marquee__content {
        display: flex;
        list-style: none;
        animation: scrolling 45s linear infinite;
    }

    .marquee__item {
        flex-shrink: 0;
    }

    @keyframes scrolling {
        0% {
            transform: translateX(0)
        }

        100% {
            transform: translateX(-100%)
        }
    }
</style>
<div class="container pt-2">
    <hr class="border">
    <div class="d-flex justify-content-center align-items-center">
        <h3 class="card-text-title text-center mt-2 pb-3">MOSTRADOR</h3>
    </div>
    <h4 class="text-left tit-cont">
        <a href="/categoria/carne-vacuna">
            Carne vacuna <span style="font-size: 1.4rem;">(ver más...)</span>
        </a>
    </h4>
    <div class="d-flex justify-content-center align-items-center">
        <?php echo do_shortcode('[products category="carne-vacuna" limit="5"]'); ?>
    </div>
    <h4 class="text-left tit-cont">
        <a href="/categoria/carne-vacuna">
            Cerdo <span style="font-size: 1.4rem;">(ver más...)</span>
        </a>
    </h4>
    <div class="d-flex justify-content-center align-items-center">
        <?php echo do_shortcode('[products category="cerdo" limit="5"]'); ?>
    </div>
    <h4 class="text-left tit-cont">
        <a href="/categoria/carne-vacuna">
            Pollo <span style="font-size: 1.4rem;">(ver más...)</span>
        </a>
    </h4>
    <div class="d-flex justify-content-center align-items-center">
        <?php echo do_shortcode('[products category="pollo" limit="5"]'); ?>
    </div>

</div>

<style>
    .tit-cont {
        margin: 0 0 -1rem 5rem;
        font-size: 2rem;
    }
</style>
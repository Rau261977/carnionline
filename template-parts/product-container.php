<div class="container pt-5">
    <hr class="border">
    <!--<div class="text-center">
        <h3 class="card-text-title">Pase y vea</h3>
    </div> -->
    <h4 class="text-left">
        <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/carne-vacuna')); ?>" class="text-decoration-none">
            Carne vacuna <span style="font-size: 1.4rem;">(ver más...)</span>
        </a>
    </h4>
    <div class="row d-none d-sm-block">
        <?php echo do_shortcode('[products category="carne-vacuna" limit="5" columns="2"]'); ?>
    </div>
    <div class="row d-block d-sm-none">
        <?php echo do_shortcode('[products category="carne-vacuna" limit="6" columns="2"]'); ?>
    </div>

    <h4 class="text-left">
        <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/cerdo')); ?>" class="text-decoration-none">
            Cerdo <span style="font-size: 1.4rem;">(ver más...)</span>
        </a>
    </h4>
    <div class="row d-none d-sm-block">
        <?php echo do_shortcode('[products category="cerdo" limit="5" columns="2"]'); ?>
    </div>
    <div class="row d-block d-sm-none">
        <?php echo do_shortcode('[products category="cerdo" limit="6" columns="2"]'); ?>
    </div>

    <h4 class="text-left">
        <a href="<?php echo esc_url(get_site_url(null, '/categoria-producto/pollo')); ?>" class="text-decoration-none">
            Pollo <span style="font-size: 1.4rem;">(ver más...)</span>
        </a>
    </h4>
    <div class="row d-none d-sm-block">
        <?php echo do_shortcode('[products category="pollo" limit="5" columns="2"]'); ?>
    </div>
    <div class="row d-block d-sm-none">
        <?php echo do_shortcode('[products category="pollo" limit="6" columns="2"]'); ?>
    </div>
</div>
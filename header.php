<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Carni_On_Line
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'peluditos'); ?></a>

		<div class="announcement-bar pt-1 pb-1 d-none d-lg-block">
			<div class="scroll-image" style="display: none;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/mariopng.png" alt="Imagen al hacer scroll" />
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<ul class="announcement-bar_list">
							<li>
								<i class="bi bi-telephone rounded-circle"></i>
								<a href="tel:+1111111111" class="text-decoration-none">123 456 7890</a>
							</li>
							<li>
								<i class="bi bi-envelope rounded-circle"></i>
								<a href="mailto:hello@peluditos.com" class="text-decoration-none">hola@carniceria.com</a>
							</li>
							<li>
								<i class="bi bi-truck rounded-circle"></i>envíos a domicilio
							</li>
							<li>
								<i class="bi bi-clock-history rounded-circle"></i>Todos los medios de pago
							</li>
							<li>
								<i class="bi bi-person rounded-circle"></i>de lunes a domingo
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<a href="./mi-cuenta" class="nav-link p-0 d-flex justify-content-end align-items-center">
							<i class="bi bi-person rounded-circle fs-5"></i>
							<span class="icon-text">Mi cuenta</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row align-items-center d-flex justify-content-center">
					<div class="col-xl-3 col-12 d-flex justify-content-center logo-container-xl">
						<?php the_custom_logo(); ?>
					</div>
					<div class="col-xl-6 col-sm-12 col-md-5 d-flex justify-content-center align-items-center">
						<nav id="site-navigation" class="main-navigation">
							<div class="container d-flex justify-content-center">
								<div class="row">
									<div class="col-12 d-flex justify-content-center">

										<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
											<i class="bi bi-list"></i>
											<span class="screen-reader-text"><?php esc_html_e('Primary Menu', 'peluditos'); ?></span>
										</button>
									</div>
									<div class="col-12 text-center">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
											)
										);
										?>
									</div>
								</div>
							</div>
						</nav>
					</div>
					<div class="col-xl-3 d-flex flex-column pt-2 justify-content-end align-items-end">
						<div class="menu-secundario-container d-none d-md-block">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'menu_secundario',
								'container' => false, // Evita un contenedor extra
								'menu_class' => 'menu-secundario-class', // Asigna clase directamente a la lista
							));
							?>
						</div>
					</div>
				</div>
				<hr class="custom-hr" style="color: #000; ">


			</div>
		</header><!-- #masthead -->
	</div> <!-- Cierre de #page -->
	<?php wp_footer(); ?>

	<a href="https://api.whatsapp.com/send?phone=1111111&text=Hola,%20quiero%20más%20información" target="_blank" rel="noopener noreferrer" class="whatsapp-icon" style="display: inline-block;">
		<span>Contacta por WhatsApp</span>
		<img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp-icon.png" alt="Icono de WhatsApp">
	</a>


</body>

</html>
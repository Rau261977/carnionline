<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Carni_On-Line
 */

?>

<footer id="colophon" class="site-footer">

	<div class="site-info">

		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(
			esc_html__('Desarrollado y diseñado por: %s - 2025', 'carnionline'),
			'<a href="https://carniceriasdigitales.com"><span style="color:red">CarniceriasDigitales</span></a>'
		);
		?>
	</div><!-- .site-info -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
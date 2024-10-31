jQuery(document).ready(function ($) {
	// Captura el evento de clic en el botón "Agregar al carrito"
	$('body').on('click', '.add_to_cart_button', function (e) {
		var $button = $(this);

		// Obtiene el campo de texto correspondiente
		var inputField = $button
			.closest('.product')
			.find('textarea[name="yith_wc_input_text"]');

		// Verifica si el campo existe y tiene un valor
		if (inputField.length && inputField.val()) {
			// Almacena el comentario en el botón para usarlo después
			$button.data('yith_wc_input_text', inputField.val());
		}
	});

	// Intercepta el envío AJAX de "Agregar al carrito" para incluir el comentario
	$(document).on('click', '.add_to_cart_button', function (e) {
		e.preventDefault();

		var $button = $(this);
		var product_id = $button.data('product_id');
		var comments = $button.data('yith_wc_input_text') || '';

		$.ajax({
			url: wc_add_to_cart_params.ajax_url,
			type: 'POST',
			data: {
				action: 'woocommerce_add_to_cart',
				product_id: product_id,
				yith_wc_input_text: comments,
			},
			success: function (response) {
				if (!response.error) {
					// Actualiza el carrito para reflejar la nota agregada
					$(document.body).trigger('wc_fragment_refresh');
					alert('Producto agregado con nota!');
				} else {
					alert(response.error);
				}
			},
			error: function () {
				alert('Error al agregar el producto.');
			},
		});
	});
});

jQuery(document).ready(function ($) {
	// Intercepta el evento de clic en el botón "Agregar al carrito"
	$('body').on('click', '.add_to_cart_button', function (e) {
		e.preventDefault();

		var $button = $(this);
		var product_id = $button.data('product_id');

		// Captura el valor del campo de texto de la nota justo antes de enviar la solicitud
		var inputField = $button
			.closest('.product')
			.find('textarea[name="yith_wc_input_text"]');
		var comments = inputField.length ? inputField.val() : '';

		// Asegúrate de que el valor de la nota no esté vacío antes de realizar la solicitud
		if (!comments) {
			alert(
				'Por favor, agrega una nota antes de añadir el producto al carrito.'
			);
			return;
		}

		// Enviar el producto y la nota mediante AJAX
		$.ajax({
			url: wc_add_to_cart_params.ajax_url,
			type: 'POST',
			data: {
				action: 'woocommerce_add_to_cart',
				product_id: product_id,
				quantity: 1,
				yith_wc_input_text: comments,
			},
			success: function (response) {
				if (!response.error) {
					// Actualiza el carrito para reflejar la nota agregada
					$(document.body).trigger('wc_fragment_refresh');
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

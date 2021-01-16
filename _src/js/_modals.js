/*global jQuery:false */
/*global UIkit:false */
/*global $:false */
/*global window:false */
/*global document:false */
/*global pesapress:false */

jQuery(function($) {

	$('body').on('click', '.pesapress-modal', function(e){
		var $elem = $(this),
			$nonce = $elem.attr('data-nonce'),
			$action = $elem.attr('data-action'),
			$label = $elem.attr('title'),
			$modal = $('.object-details'),
			$modal_title = $('.object-details .uk-modal-title'),
			$modal_content = $('.object-details .uk-modal-body');
			pesapress.helper.notification.reset();
		$elem.html('<img src="'+pesapress.assets.spinner+'"/>');
		$.post(
			window.ajaxurl,
			{ '_wpnonce' : $nonce, 'action' : $action }
		).done( function( response ) {
			$elem.html($label);
			if ( response.success === true ) {
				$modal_title.html(response.data.title);
				$modal_content.html(response.data.html);
				UIkit.modal($modal).show();
			} else {
				pesapress.helper.notification.show(response.data, 'warning');
			}
		}).fail(function(xhr, status, error) {
			$elem.html($label);
			pesapress.helper.notification.show(pesapress.loading.error, 'danger');
		});
	});

	$('body').on('click', '.pesapress-edit-modal', function(e){
		var $elem = $(this),
			$nonce = $elem.attr('data-nonce'),
			$action = $elem.attr('data-action'),
			$label = $elem.attr('title'),
			$id = $elem.attr('data-id'),
			$modal = $('.object-details'),
			$modal_title = $('.object-details .uk-modal-title'),
			$modal_content = $('.object-details .uk-modal-body'),
			$loader_class = 'pesapress-setup-loader',
			$form = $('.pesapress-gateway-list');
		pesapress.helper.loader($loader_class,$form);
		$.post(
			window.ajaxurl,
			{ '_wpnonce' : $nonce, 'action' : $action, 'id' : $id }
		).done( function( response ) {
			$('.'+$loader_class).remove();
			if ( response.success === true ) {
				$modal_title.html(response.data.title);
				$modal_content.html(response.data.html);
				UIkit.modal($modal).show();
			} else {
				pesapress.helper.notification.show(response.data, 'warning');
			}
		}).fail(function(xhr, status, error) {
			$('.'+$loader_class).remove();
			pesapress.helper.notification.show(pesapress.loading.error, 'danger');
		});
	});

	$('body').on('click', '.pesapress-view-modal', function(e){
		var $elem = $(this),
			$nonce = $elem.attr('data-nonce'),
			$action = $elem.attr('data-action'),
			$label = $elem.attr('title'),
			$id = $elem.attr('data-id'),
			$modal = $('.object-details'),
			$modal_title = $('.object-details .uk-modal-title'),
			$modal_content = $('.object-details .uk-modal-body'),
			$loader_class = 'pesapress-setup-loader',
			$form = $('.pesapress-logs-list');
		pesapress.helper.loader($loader_class,$form);
		$.post(
			window.ajaxurl,
			{ '_wpnonce' : $nonce, 'action' : $action, 'id' : $id }
		).done( function( response ) {
			$('.'+$loader_class).remove();
			if ( response.success === true ) {
				$modal_title.html(response.data.title);
				$modal_content.html(response.data.html);
				UIkit.modal($modal).show();
			} else {
				pesapress.helper.notification.show(response.data, 'warning');
			}
		}).fail(function(xhr, status, error) {
			$('.'+$loader_class).remove();
			pesapress.helper.notification.show(pesapress.loading.error, 'danger');
		});
	});
});
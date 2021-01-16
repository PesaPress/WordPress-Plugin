/*global jQuery:false */
/*global UIkit:false */
/*global $:false */
/*global window:false */
/*global document:false */
/*global pesapress:false */

jQuery(function($) {

	$('body').on('change', '.pesapress-load-setup-select', function(e){
		var $elem = $(this),
			$val = $elem.val(),
			$nonce = $elem.attr('data-nonce'),
			$action = $elem.attr('data-action'),
			$target = $('.pesapress-setup-form-details'),
			$loader_class = 'pesapress-setup-loader',
			$form = $('.create-gateway-form');
		if ( $val !== '0' ) {
			pesapress.helper.loader($loader_class,$form);
			$.post(
				window.ajaxurl,
				{ '_wpnonce' : $nonce, 'action' : $action, 'gateway' : $val }
			).done( function( response ) {
				$('.'+$loader_class).remove();
				if ( response.success === true ) {
					$target.html(response.data);
				} else {
					$target.html(pesapress.loading.error);
				}
			}).fail(function(xhr, status, error) {
				$('.'+$loader_class).remove();
				$target.html(pesapress.loading.error);
			});
		} else {
			$target.html('');
		}
	});

	$('body').on('submit', '.create-gateway-form', function(e){
		var $form = $(this),
			$button = $form.find('button'),
			$loader_class = 'pesapress-setup-loader';
		pesapress.helper.loader($loader_class,$form);
		$button.attr('disabled', 'disabled');
		$.post(
			window.ajaxurl,
			$form.serialize()
		).done( function( response ) {
			$button.removeAttr('disabled');
			$('.'+$loader_class).remove();
			if ( response.success === true ) {
				pesapress.helper.notification.show(response.data.message, 'success');
				window.setTimeout(function () {
					window.location.href = response.data.url;
				}, 1000);
			} else {
				pesapress.helper.notification.show(response.data, 'warning');
			}
		}).fail(function(xhr, status, error) {
			$('.'+$loader_class).remove();
			$button.removeAttr('disabled');
			pesapress.helper.notification.show(pesapress.error, 'danger');
		});
		return false;
	});


	$('body').on('click', '.clone-gateway', function(e){
		var $elem = $(this),
			$label = $elem.attr('title'),
			$nonce = $elem.attr('data-nonce'),
			$action = $elem.attr('data-action'),
			$id = $elem.attr('data-id'),
			$loader_class = 'pesapress-setup-loader',
			$form = $('.pesapress-gateway-list');
		pesapress.helper.loader($loader_class,$form);
		$.post(
			window.ajaxurl,
			{ '_wpnonce' : $nonce, 'action' : $action, 'id' : $id }
		).done( function( response ) {
			$('.'+$loader_class).remove();
			if ( response.success === true ) {
				window.setTimeout(function () {
					window.location.href = response.data.url;
				}, 100);
			}
		}).fail(function(xhr, status, error) {
			$('.'+$loader_class).remove();
		});
	});

	$('body').on('click', '.delete-gateway', function(e){
		var $elem = $(this),
			$label = $elem.attr('title'),
			$nonce = $elem.attr('data-nonce'),
			$action = $elem.attr('data-action'),
			$id = $elem.attr('data-id'),
			$loader_class = 'pesapress-setup-loader',
			$form = $('.pesapress-gateway-list');
		pesapress.helper.loader($loader_class,$form);
		$.post(
			window.ajaxurl,
			{ '_wpnonce' : $nonce, 'action' : $action, 'id' : $id }
		).done( function( response ) {
			$('.'+$loader_class).remove();
			if ( response.success === true ) {
				window.setTimeout(function () {
					window.location.href = response.data.url;
				}, 100);
			}
		}).fail(function(xhr, status, error) {
			$('.'+$loader_class).remove();
		});
	});

	$('body').on('click', '.pesapress-select-all', function(e){
		$( '.pesapress-gateway-list tbody input[type="checkbox"]' ).prop('checked', this.checked);
		var ids = $( ".pesapress-gateway-list tbody input:checked" ).map( function() { if ( parseFloat( this.value ) ) { return this.value; } } ).get().join( ',' );
		
		$( 'form[name="bulk-action-form"] input[name="ids"]' ).val( ids );
	});

	$('body').on('click', '.pesapress-single-check', function(e){
		var ids = $( ".pesapress-gateway-list tbody input:checked" ).map( function() { if ( parseFloat( this.value ) ) { return this.value; } } ).get().join( ',' );
		
		$( 'form[name="bulk-action-form"] input[name="ids"]' ).val( ids );
	});
 
	$('body').on('submit', '.bulk-action-form', function(e){
		var $form = $(this),
			$button = $form.find('button'),
			$loader_class = 'pesapress-setup-loader';
		pesapress.helper.loader($loader_class,$('.pesapress-gateway-list'));
		$button.attr('disabled', 'disabled');
		$.post(
			window.ajaxurl,
			$form.serialize()
		).done( function( response ) {
			$button.removeAttr('disabled');
			$('.'+$loader_class).remove();
			if ( response.success === true ) {
				window.location.href = response.data.url;
			} else {
				pesapress.helper.notification.show(response.data, 'warning');
			}
		}).fail(function(xhr, status, error) {
			$('.'+$loader_class).remove();
			$button.removeAttr('disabled');
			pesapress.helper.notification.show(pesapress.error, 'danger');
		});
		return false;
	});
});
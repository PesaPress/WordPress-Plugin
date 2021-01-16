/*global jQuery:false */
/*global UIkit:false */
/*global $:false */
/*global window:false */
/*global document:false */
/*global pesapress:false */

jQuery(function($) {
	$('body').on('click', '.pesapress-log-select-all', function(e){
		$( '.pesapress-logs-list tbody input[type="checkbox"]' ).prop('checked', this.checked);
		var ids = $( ".pesapress-logs-list tbody input:checked" ).map( function() { if ( parseFloat( this.value ) ) { return this.value; } } ).get().join( ',' );
		
		$( 'form[name="bulk-logs-form"] input[name="ids"]' ).val( ids );
		$( 'form[name="export-logs-form"] input[name="ids"]' ).val( ids );
	});

	$('body').on('click', '.pesapress-log-single-check', function(e){
		var ids = $( ".pesapress-logs-list tbody input:checked" ).map( function() { if ( parseFloat( this.value ) ) { return this.value; } } ).get().join( ',' );
		
		$( 'form[name="bulk-logs-form"] input[name="ids"]' ).val( ids );
		$( 'form[name="export-logs-form"] input[name="ids"]' ).val( ids );
	});

	$('body').on('click', '.delete-log', function(e){
		var $elem = $(this),
			$label = $elem.attr('title'),
			$nonce = $elem.attr('data-nonce'),
			$action = $elem.attr('data-action'),
			$id = $elem.attr('data-id'),
			$loader_class = 'pesapress-setup-loader',
			$form = $('.pesapress-logs-list');
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

	$('body').on('submit', '.bulk-logs-form, .filter-logs-form', function(e){
		var $form = $(this),
			$button = $form.find('button'),
			$loader_class = 'pesapress-setup-loader';
		pesapress.helper.loader($loader_class,$('.pesapress-logs-list'));
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


	$('body').on('click', '.pesapress-manage-log', function(e){
		var $button = $(this),
			$id = $button.attr('data-id'),
			$nonce = $button.attr('data-nonce'),
			$status = $('.log_status').val(),
			$loader_class = 'pesapress-setup-loader';
		pesapress.helper.loader($loader_class,$('.pesapress-view-log'));
		$button.attr('disabled', 'disabled');
		$.post(
			window.ajaxurl,
			{ '_wpnonce' : $nonce, 'action' : 'pesapress_update_log', 'id' : $id, 'status' : $status }
		).done( function( response ) {
			$button.removeAttr('disabled');
			$('.'+$loader_class).remove();
			if ( response.success === true ) {
				$('td#'+$id).html($status);
			} else {
				pesapress.helper.notification.show(response.data, 'warning');
			}
		}).fail(function(xhr, status, error) {
			$('.'+$loader_class).remove();
			$button.removeAttr('disabled');
			pesapress.helper.notification.show(pesapress.error, 'danger');
		});
	});
});
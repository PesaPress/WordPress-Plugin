/*global jQuery:false */
/*global UIkit:false */
/*global $:false */
/*global window:false */
/*global document:false */
/*global pesapress:false */

jQuery(function($) {

	$('body').on('submit', '.pesapress-general-setting-form', function(e){
		var $form = $(this),
			$button = $form.find('button'),
			$loader_class = 'settings-form-loader';
		pesapress.helper.loader($loader_class,$form);
		$button.attr('disabled', 'disabled');
		pesapress.helper.notification.reset();
		$.post(
			window.ajaxurl,
			$form.serialize()
		).done( function( response ) {
			$button.removeAttr('disabled');
			$('.'+$loader_class).remove();
			if ( response.success === true ) {
				pesapress.helper.notification.show(response.data, 'success');
			} else {
				pesapress.helper.notification.show(response.data, 'warning');
			}
		}).fail(function(xhr, status, error) {
			$button.removeAttr('disabled');
			$('.'+$loader_class).remove();
			pesapress.helper.notification.show(pesapress.error, 'danger');
		});
		return false;
	});


	$('body').on('submit', '.pesapress-field-setting-form', function(e){
		var $form = $(this),
			$button = $form.find('button'),
			$loader_class = 'settings-form-loader';
		pesapress.helper.loader($loader_class,$form);
		$button.attr('disabled', 'disabled');
		pesapress.helper.notification.reset();
		$.post(
			window.ajaxurl,
			$form.serialize()
		).done( function( response ) {
			$button.removeAttr('disabled');
			$('.'+$loader_class).remove();
			if ( response.success === true ) {
				pesapress.helper.notification.show(response.data, 'success');
			} else {
				pesapress.helper.notification.show(response.data, 'warning');
			}
		}).fail(function(xhr, status, error) {
			$button.removeAttr('disabled');
			$('.'+$loader_class).remove();
			pesapress.helper.notification.show(pesapress.error, 'danger');
		});
		return false;
	});
});
/*global jQuery:false */
/*global UIkit:false */
/*global $:false */
/*global window:false */
/*global document:false */
/*global pesapress:false */

window.pesapress = window.pesapress || {};

pesapress.helper = {

	/**
	 * Notification
	 */
	notification : {
		show : function(message, type){
			jQuery('.pesapress-message').html('<a class="uk-alert-close" uk-close></a>'+message).addClass('uk-alert-' + type).removeClass('uk-invisible');
		},
		
		reset : function(){
			jQuery('.pesapress-message').html('').removeClass('uk-alert-success').removeClass('uk-alert-warning').removeClass('uk-alert-danger').addClass('uk-invisible');
		}
	},
	
	/**
	 * Progress Loader
	 */
	loader : function(container_class,elem){
		jQuery("<div class='"+container_class+"'><img src='"+pesapress.assets.spinner+"' class='pesapress-spinner-center'/></div>").css({
			position: "absolute",
			width: "100%",
			height: "100%",
			top: 0,
			left: 0,
			background: "#ecebea",
			textAlign : 'center'
		}).appendTo(elem.css("position", "relative"));
	},

	/**
	 * UI slider
	 */
	slider : function(elem) {
		var target = jQuery(elem).attr('data-id'),
			max = jQuery(elem).attr('data-max'),
			field = jQuery('input[name='+target+']');
		jQuery( elem ).slider({
			min: 0,
			max: max,
			value: field.val(),
			slide: function( event, ui ) {
				jQuery( "." + target ).html( ui.value );
				field.val( ui.value );
			}
		});
	}
};
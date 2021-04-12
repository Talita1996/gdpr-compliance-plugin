(function( $ ) {
	$(document).ready(function() {
		/*if(localStorage.getItem('popState') != 'shown'){
			$('.tm-container').delay(2000).fadeIn();
			localStorage.setItem('popState','shown')
		}*/
		
		if(localStorage.getItem('popState') != 'hide'){
			$('.tm-container').css( 'opacity', '1' );
		}
	
		if(localStorage.getItem('popState') == 'hide'){
			//localStorage.setItem('popState','shown')
			$('.tm-container').remove();
		}

		$('.tm-compliance-button').click(function() // You are clicking the close button
		{
			$('.tm-container').fadeOut();
			localStorage.setItem('popState','hide')
		});
	});

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );

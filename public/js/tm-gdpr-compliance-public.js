(function( $ ) {
	$(document).ready(function() {
		
		if(localStorage.getItem('popState') != 'hide'){
			$('.tm-container').css( 'opacity', '1' );
		}
	
		if(localStorage.getItem('popState') == 'hide'){
			$('.tm-container').remove();
		}

		$('.tm-compliance-button').click(function() 
		{
			$('.tm-container').fadeOut();
			localStorage.setItem('popState','hide')
		});

	});

})( jQuery );

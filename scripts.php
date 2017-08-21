<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js" integrity="sha256-SOuLUArmo4YXtXONKz+uxIGSKneCJG4x0nVcA0pFzV0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.slider-self').slick({
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear'
		});

		$('.characteristics__slider').slick({
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			dots: true
		});
	});
</script>
<script>
	$(document).ready(function(){
		
		$('ul.tabs li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
		})

	})
</script>
<script>
	jQuery(document).ready(function($) {
		$('.open-popup-link').magnificPopup({
	      type:'inline',
	      midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	    });

	    $('.popup-img').magnificPopup({
	      type: 'image'
	      // other options
	    });
    });
</script>
	<div class="grid grid-pad">
		<div class="col-1-3 center">
			<div class="fb-comments" 
				data-href="https://www.facebook.com/groups/550202908362867/" 
				data-numposts="5" data-colorscheme="light">
			</div>
			<p>Site Design by Thomas A. Manley</p>
		</div>
	</div>

<script>

	function initialize() {
	var mapCanvas = document.getElementById('map_canvas');
	var mapOptions = {
	  center: new google.maps.LatLng(38.1572211, -85.8742819),
	  zoom: 14,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(mapCanvas, mapOptions)
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
	  $(function() {
	    $("#slider1").responsiveSlides({
		    auto: false,
		    pager:true,
        	nav: true,
        	speed: 500,
        	namespace: "centered-btns"
	    });
	  });
</script>
</body>
</html>

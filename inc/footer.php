
</div>
	<footer>
		<div class="grid grid-pad">
			<div class="col-2-3">
				<div class="fb-comments" 
					data-href="https://www.facebook.com/groups/550202908362867/" 
					data-numposts="5" data-colorscheme="dark">
				</div>
			</div>
			<div class="col-1-3 padded">
				<h4>Site Design By</h4> <h2>Thomas A. Manley</h2>
				<ul>
					<li><a href="https://github.com/tmanley1985"><img src="/graphics/github.png"></a></li>
					<li><a href="https://www.linkedin.com/pub/thomas-manley/a8/203/b9a"><img src="/graphics/linkedin.ico"></a></li>
				</ul>
			</div>
	</footer>
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

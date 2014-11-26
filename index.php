<?php
	$page = 'home';
	require('inc/header.php');

?>
		
			<div class="rslides_container">
				<ul class="rslides" id="slider1">
					<li>
						<iframe class="youtube-player" id="vid" type="text/html" width="450" height="500" src="http://www.youtube.com/embed/bMEFF-w-BtQ"> </iframe>
					</li>
					<li><img src="graphics/alifrazier.jpg" alt="Ali and Frazier"></li>
					<li><img src="graphics/handwraps.jpg" alt="Handwraps"></li>
					<li><img src="graphics/ammyboxing.jpg" alt="Ammy Boxing"></li>
				</ul>
			</div>

		<div class="grid grid-pad">
			<div class="center">
				<div class="col-1-3">
					<section>
						<h2>About Us</h2>
						<br>
						<p>Throwdown Boxing Club is Louisville
							KY's premier boxing gym.  A 501(c)3 
							nonprofit organization founded by 
							Coach Steve Bailey, with numerous 
							amateur champions, golden and silver 
							gloves winners Throwdown has
							cemented itself as the place
							to be for boxing in Louisville.</p>
					</section>
				</div>

				<div class="col-1-3">
					<section>
						<h2>Our Schedule</h2>
						<br>
						<p>Monday - Thursday 5:30-8:00
							Two and a half hours, four
							days a week we train champion
							amateur boxers. </p>
					</section>
					
				</div>

				<div class="col-1-3">
					<section>
						<h2>News</h2>
						<br>
						<p>5 Bobby Hughes National Champions!</p>
					</section>
				</div>
			</div>
		</div>

<?php
	require('inc/footer.php');
?>
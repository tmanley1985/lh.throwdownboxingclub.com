<?php
	$page = 'home';
	require('inc/header.php');

?>
		
			<div class="rslides_container">
				<ul class="rslides" id="slider1">
					<li>
						<iframe class="youtube-player" id="vid" type="text/html" width="450" height="500" src="http://www.youtube.com/embed/bMEFF-w-BtQ"> </iframe>
					</li>
					<li><img src="graphics/awards.jpg" alt="awards"><p class="caption">Silver Gloves, Golden Gloves and National Champions!</p></li>
					<li><img src="graphics/handwraps.jpg" alt="Handwraps"><p class="caption">Hard work and dedication</p></li>
					<li><img src="graphics/ammyboxing.jpg" alt="Ammy Boxing"><p class="caption">REAL Boxing in Louisville</p></li>
				</ul>
			</div>

		<div class="grid grid-pad">
			<div class="center">
				<div class="col-1-3">
					<section>
						<h2>About Us</h2>
						<br>
						<p>Throwdown Boxing Club is Louisville
							KY's premier boxing gym; a 501(c)3 
							nonprofit organization founded by 
							Head Coach Steve Bailey. Assisted 
							by Coach Thomas A. Manley and Rock
							Cruz, our gym has built numerous 
							amateur champions, golden and silver 
							gloves winners. Throwdown has
							cemented itself as the only place
							to be for REAL boxing in Louisville.
							</p>
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
						<p>Headed to the Indiana Silver Gloves!
							The whole team is gearing up for some
							stiff competition.  The Indiana Silver
							Gloves are a Regional tournament with
							opportunities to advance to the National
							level.</p>
					</section>
				</div>
			</div>
		</div>

<?php
	require('inc/footer.php');
?>
<!DOCTYPE>
<html>
<head>
			<meta charset="UTF-8">
			<title>Throwdown Boxing Club</title>
			<link rel="stylesheet" type="text/css" href="css/normalize.css">
			<link rel="stylesheet" type="text/css" href="css/simplegrid.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
			<script src="js/responsiveslides/responsiveslides.min.js"></script>
</head>
<body>
	<div id="wrapper"> 
		<img src="graphics/logo.png">
		<div class="grid grid-pad">
			<div class="col-1-1">
				<h1>Throwdown Boxing Club</h1>
			</div>
		</div>
		<header>
			<div class="grid grid-pad">
				<div class="col-1-1">
					<nav>
						<ul>
							<li class="selected"><a href="">Home</a></li>
							<li><a href="">Accolades</a></li>
							<li><a href="">Media</a></li>
							<li><a href="">Sponsorship</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<div class="grid-pad">
			<ul class="rslides">
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
							KY's premier boxing gym.  With
							numerous amateur champions, golden
							and silver gloves winners Throwdown
							has cemented itself as the place
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
	</div>
<script>
	  $(function() {
	    $(".rslides").responsiveSlides();
	  });
</script>
</body>
</html>


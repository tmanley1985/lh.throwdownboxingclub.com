<!DOCTYPE>
<html>
<head>
			<meta charset="UTF-8">
			<title>Throwdown Boxing Club</title>
			<link rel="stylesheet" type="text/css" href="/css/normalize.css">
			<link rel="stylesheet" type="text/css" href="/css/simplegrid.css">
			<link rel="stylesheet" type="text/css" href="/css/main.css">
			<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC' rel='stylesheet' type='text/css'>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
			<script src="js/responsiveslides/responsiveslides.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js"></script>
				
</head>
<body>
	<div id="wrapper"> 
		<div id="fb-root"></div>
			<script>
				(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
		<div class="grid grid-pad">
			<div class="col-1-1">
				<h1>Throwdown Boxing Club</h1>
				<br>
				<h4>Louisville, KY</h4>
			</div>
		</div>
		<header>
			<div class="grid grid-pad">
				<div class="col-1-1">
					<nav>
						<ul>

							<?php if ($page == 'home') { ?><li><a href="index.php" class="selected">Home</a></li>
							<?php } else { ?><li><a href="index.php">Home</a><?php } ?>

							<?php if ($page == 'facility') { ?><li><a href="facility.php" class="selected">Facility</a></li>
							<?php } else { ?><li><a href="facility.php">Facility</a><?php } ?>

							<?php if ($page == 'info') { ?><li><a href="info.php" class="selected">Info</a></li>
							<?php } else { ?><li><a href="info.php">Info</a><?php } ?>
						</ul>
					</nav>
				</div>
			</div>
		</header>

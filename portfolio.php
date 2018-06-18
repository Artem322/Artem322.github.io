<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MILAV IT - Portfolio</title>
	<link rel="stylesheet" type="text/css" href="web/css/animate.css">
	<link rel="shortcut icon" type="image/x-icon" href="web/img/ico/icon.png">
	<link rel="stylesheet" type="text/css" href="web/css/style.css">
	<script src="web/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>
<body style="background-image: url(web/img/bg/6th.jpg);background-size: 100%;">
<?php require("header.php");?>
<div class="port-cont">
	<div class="opac wow fadeInDown">
	<h1 class="welc">See our galery of projects</h1>
	</div>
		<?php require('widget-watch.php') ?>
	<div id="more" class="gallery">
		<h2 style="margin:500px 0 100px 0">Projects Gallery</h2>
		<div class="gall-cont">
			<div class="wow fadeInUp">
				<img src="web/img/proj/active.jpg" alt="">
				<p class="names"><a href="http://aktivrelax.com/">AktivRelax</a></p>
				<hr class="gal-hr">
			</div>
			<div class="marg wow fadeInUp">
				<img src="web/img/proj/art.jpg" alt="">
				<p class="names"><a href="http://www.artfoyer.ro/">Artfoyer</a></p>
				<hr class="gal-hr">
			</div>
			<div class="marg wow fadeInUp">
				<img src="web/img/proj/egeszen.jpg" alt="">
				<p class="names"><a href="http://www.egeszen.ro/">EgeszEn</a></p>
				<hr class="gal-hr">
			</div>
			<div class="marg wow fadeInUp">
				<img src="web/img/proj/woof.jpg" alt="">
				<p class="names"><a href="http://www.wwoof.ro/">WWOOF Romania</a></p>
				
			</div>
		</div>
	</div>
</div>
<?php require("footer.php");?>
</body>
</html>
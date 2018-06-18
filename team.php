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
<body style="background-image: url(web/img/bg/8th.jpg);background-size: 100%;height: auto;">
	<?php require('header.php');?>
	<div class="about-cont">
		<h1 class="wow fadeInDown" style="line-height: 1;margin-bottom: 150px">Meat our team of developers</h1>
		<div align="center" style="margin-bottom: 292px"><?php require('widget-watch.php'); ?></div>
		<div id="more" class="team-cont">
		<div class="wow fadeInUp">
			<h2>Ion Seremet</h2>
			<img style="width: 300px" src="web/img/team/Ionut.jpg">
			<h3>Developer</h3>
			<hr>
		</div>
		<div class="wow fadeInUp">
			<h2>Oleg Petcu</h2>
			<img style="width: 300px" src="web/img/team/Oleg.jpg">
			<h3>Developer</h3>
			<hr>
		</div>
		<div class="wow fadeInUp">
			<h2>Csatlos Sandor</h2>
			<img src="web/img/team/Sandor.jpg">
			<h3>CEO</h3>
			<hr>
		</div>
		<div class="wow fadeInUp">
			<h2>Artiom Arutiunov</h2>
			<img style="width: 300px" src="web/img/team/Artiom.jpg">
			<h3>Junior-developer</h3>
		</div>
		</div>
	</div>
	<?php require('footer.php');?>
</body>
</html>
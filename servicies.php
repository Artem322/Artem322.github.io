<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MILAV IT - Servicies</title>
	<link rel="shortcut icon" type="image/x-icon" href="web/img/ico/icon.png">
	<link rel="stylesheet" type="text/css" href="web/css/animate.css">
	<link rel="stylesheet" type="text/css" href="web/css/style.css">
	<script src="web/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>

<body style="background-image: url(web/img/bg/2nd.jpg);background-size: 100%;">
<?php
require('header.php');
?>
<div class="main-content">
	<div class="serv-cont">
		<p class="serv-text wow fadeInDown">Here are presented <br>
		some of our servicies</p>
		<?php require('widget-watch.php')?>
		<!-- <div class="moved">
			<a href="javascript://0" class="mover" onclick="slowScroll('#more')">Watch</a>
		</div> -->
	</div>
	<div id="more" class="main-content-cont">
		<div class="htmlcss wow fadeInLeft">
			<span class="aligning"><img class="cont-img" src="web/img/content/html5.png"></span>
			<div class="cont-text">
				<h3>HTML5 & CSS & JavaScript</h3><br>
				<p>The Internet is ubiquitous and we can’t work without it for a long time. The global network connects all devices that can render a website. HTML5 and CSS3 and Javascript are essential ingredients of your modern, responsive website and we have the promise of truly open on any modern day device you can imagine... </p><br>
				<p>Want some beautiful and clean web design to work on desktop but also on mobile? HTML5 and CSS3 is the key for correctly embed text content, images and videos. Want something dynamic on your website? Animating the images, or maybe some smart widgets? Javascript is the best solutions for you.</p>
			</div>
		</div>
		<div class="php wow fadeInRight">
			<span class="aligning"><img class="cont-img" src="web/img/content/php.png"></span>
			<div class="cont-text">
				<h3>PHP</h3><br>
				<p>Did you know that PHP is one of the biggest programing languages out there? And it has a lot of advantages, like fast load time, good for complex calculations, good connectivity with databases and endless possibilities for your ideas...</p>
				<p>That’s why we use it to provide web applications for our clients.</p><br>

				<p>This is how we work: product analysis, design, implementation and maintenance.</p><br>

				<p>What is your idea?</p>	
			</div>
		</div>
		<div class="yii2 wow fadeInLeft">
			<span class="aligning"><img class="cont-img" src="web/img/content/yii2.png"></span>
			<div class="cont-text">
				<h3>Yii2</h3>
				<p>Yii means “simple and evolutionary” in Chinese. But for us it means one of the best web application frameworks that we know. Designed to work well with third-party code, it’s highly extendable, pretty fast to code and it utilizes PHP’s most advanced features... </p>
				<br>
				<p>Do you need to develop real-time applications? Maybe with Ajax support included?</p><br>

				<p>Than Yii2 is a good solution for you.</p>
			</div>
		</div>
		<div class="angular wow fadeInRight">
			<span class="aligning"><img  class="cont-img"src="web/img/content/angular.png"></span>
			<div class="cont-text">
				<h3>Angular</h3>
				<p>jQuery was not the best solution for you? We can give better solutions for your project with Angular... </p><br>
				<p>Or just combining them.
				Starting with basic DOM things like color changes on mouse hover, hiding-showing elements on click, up too advanced data-manipulation, we can create powerful web apps, front-end elements that your end-users interact with.</p><br>
				<p>Let us analyze your needs and give you the best solution.</p>
			</div>
		</div>
		<div class="wordpress wow fadeInLeft">
			<span class="aligning"><img class="cont-img" src="web/img/content/wordpress.png"></span>
			<div class="cont-text">
				<h3>WordPress</h3>
				<p>Almost 30% of the websites use Wordpress. That’s like 70 million websites... </p><br>
				<p>So it’s no surprise that it has 45.000 plugins for all possible features, several thousand themes to choose from, it’s SEO friendly and can handle your blog, news site, webshop and portfolio in the same time. And it’s easy to upload your content after it’s built . And it’s free. And we really know almost every line of code from it. By heart. Really. Choose Wordpress, choose us.</p>
			</div>
		</div>
		<div class="drupal wow fadeInRight">
			<span class="aligning"><img class="cont-img" src="web/img/content/drupal.png"></span>
			<div class="cont-text">
				<h3>Drupal</h3>
				<p>The White House uses Drupal. So does NBA.com and The Economist... </p><br>
				<p>Why is Drupal the hot shot of CMS’?</p><br>

				<p>Because it has good Security, lots of Plugins and High Scalability for many content types like videos, polls, user management, text, blogs, podcasts etc. for your digital experience.
				</p><br>
				<p>So if you own a Drupal based portal or you plan to build one, you are in the right place.
			</p>
			</div>	
		</div>
	</div>
</div>
<?php
require('footer.php');
?>
</body>
<!-- <script src="web/js/jquery.min.js"></script>
<script>
	function slowScroll (id) {
 var offset = 90;
 $('html, body').animate ({
  scrollTop: $(id).offset ().top - offset
 }, 2000);
 return false;
}﻿
</script> -->
</html>
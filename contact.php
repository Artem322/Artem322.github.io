	<?php 
	if(isset($_POST['sent']))
	{
        $name=$_POST['name'];
        $from="arutiunov.artem@gmail.com";
        $to=$_POST['mail'];
        $subject="test";
        $subject="=?utf-8?B?".base64_encode($subject)."?=";
        $message=$_POST['message'];
        $headers="From : $from\r\n Reply to : $to\r\n Name :$name\r\n Content-type:text/plain; charset=utf-8\r\n" ;
        mail($to,$subject,$message,$headers);
    }
 ?>
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
<body style="background-image: url(web/img/bg/7ер.jpg);background-size: 100%;height: auto;">
	<?php require('header.php'); ?>
	<div class="contact-cont">
		<h1 class="wow fadeIn">You can let us your message here :</h1>
		<form  action="" method="post">
			<p>Name :</p>
			<input class="typed" name="name" id="trt" type="text" maxlength="60" required><br>
			<p>E-mail :</p>
			<input class="typed" name="mail" type="email" required><br>
			<p>Message :</p>
			<textarea name="textarea"  name="message" id="" cols="50" rows="8" required=""></textarea><br>
			<input name="sent" class="confirm" value="Send" type="submit">
		</form>
	</div>
	<?php require('footer.php'); ?>
</body>

</html>
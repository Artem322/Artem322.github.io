<?php 
session_start();
if (isset($_POST['sent']))
{
 $name=htmlspecialchars($_POST['name']);
 $from=htmlspecialchars($_POST['mail']);
 $to=htmlspecialchars("arutiunov.artem@gmail.com");
 $subject=htmlspecialchars("test");
 $message=htmlspecialchars($_POST['message']);
mail($to, $subject,$message);
}
 ?>


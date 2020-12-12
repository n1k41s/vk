<?php 
	session_start();
	$con = mysqli_connect("127.0.0.1","root","","urok40");
	$text_zaprosa_vstavit = "INSERT INTO posts (img, text, user_id)
	VALUES ('{$_GET["img"]}', '{$_GET["text"]}', '{$_SESSION['lol']}')";

	$zapros_vstavit = mysqli_query($con, $text_zaprosa_vstavit);
	header("location: account.php");
	exit;
	
?>
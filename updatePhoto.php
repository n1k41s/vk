<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root','','urok40');
	$uploadfile = 'img/' . basename($_FILES['photo']['name']);
	move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
	mysqli_query($con, "UPDATE users SET avatar='{$uploadfile}' WHERE id='{$_SESSION["lol"]}'");
	header('Location: account.php');
 ?>
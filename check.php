<?php 
session_start();
$con = mysqli_connect('127.0.0.1', 'root', '', 'urok40');
$query = mysqli_query($con, "SELECT * FROM users WHERE phone='{$_GET['login']}' AND password='{$_GET['password']}'");
$stroka = $query->fetch_assoc();
$num = mysqli_num_rows($query);

$_SESSION['lol'] = $stroka['id'];

if($num>0){
	header("Location: account.php");
} else{
	echo "Нет такого пользователя";
}
?>

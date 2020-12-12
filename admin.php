<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link rel="shortcut icon" href="logos.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Admin-panel</title>
</head>
<body>
		<div class="mx-auto" style="width: 400px">
			<h1 style="font-size: 20px">ДОБАВЛЕНИЕ НОВОГО ТОВАРА</h1>
			<form action="insertPost.php">
                     <div style="display: none;">
                            <input type="" name="user_id" value="$_SESSION['lol']">
                     </div>
			<div>
				<input type="" name="text"  placeholder="Текст">
			</div>
       		<div>
       			<input type="" name="img"  placeholder="IMG">
       		</div>
       		<button style="height: 30px">
       		 	<p style="color: black">
       				Добавить пост
       			</h1>
       		</button>
       		</form>
       		<a href="account.php">
       		<button style="height: 30px">
       			<p style="color: black">
       				НАЗАД
       			</p>
       		</button>
       		</a>
		</div>	
</body>
</html>
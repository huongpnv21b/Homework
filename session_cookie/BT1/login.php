
<?php
	if(isset($_POST["login"])){
		if(($_POST["username"]=="admin") && ($_POST["password"]=="123")){
			echo " Login thanh cong";
			echo "<br>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.form{
			border: 1px solid green;
			border-radius: 5px;
			width: 250px;
			background-color: black;
			opacity: 0.6;
			color: white;
		}
		label{
			color: white;
			margin-bottom: 20px;
			margin-right: 70px;
		}
		input{
			margin-bottom: 20px;
			width: 180px;
			height: 30px;
		}
		.button{
			border: 1px solid black;
			border-radius: 6px;
			background-color: green;
			width: 70px;
			height: 30px;
			margin-bottom: 20px;
			margin-left: 10px;
		}
	</style>
</head>
<body>
	<form action="" method="post" class= "form">
		<label></label><br>
		<label>User name</label><br>
		<input type="text" name="username"><br>
		<label>Pass Word</label><br>
		<input type="text" name="password">
		<button name="login" class="button">Login</button>
	</form>
</body>
</html>
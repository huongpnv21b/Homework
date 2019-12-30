
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "session_cookie";
	$db = new mysqli($servername, $username, $password, $database);

	if(isset($_POST["login"])){
		if(isset($_POST["username"]) && isset($_POST["password"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$sql = "SELECT * from users where username='$username' and password='$password'";
		$result=mysqi_fetch_array($sql);
		 echo $username;
		  echo $password;
	} 

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="username">
		<input type="text" name="password">
		<button name="login">Login</button>
	</form>
</body>
</html>

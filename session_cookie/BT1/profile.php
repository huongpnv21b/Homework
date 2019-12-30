
<?php
	// $user=$_POST['username'];
	// $password=$_POST['password'];
	// echo $user. " and " .$password;
	session_start();
	$_SESSION['username'];
	$_SESSION['password'];

	echo $_SESSION['username'];
	echo"<br>";
	echo $_SESSION['password'];


?>

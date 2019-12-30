
<?php
	
	session_start();
	if(is_array($result)) {
	$_SESSION["id"] = $result['id'];
	$_SESSION["name"] = $result['username'];
	} else {
	$message = "Invalid Username or Password!";
	}
	}
	if(isset($_SESSION["id"])) {
	header("Location:index.php");
	}


?>

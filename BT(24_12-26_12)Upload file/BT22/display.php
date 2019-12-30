<?php
	$server = "localhost";
	$user = "root";
	$pwd = "";
	$dbName = "imagemanagement";
	$db = new mysqli($server, $user, $pwd, $dbName);


		$sql = "SELECT * from image";
		$result = $db->query($sql)->fetch_all();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		img{
			width: 200px;
			height: 100px;
		}
	</style>
</head>
<body>
	<div style="display: flex">
		<?php
		
		for ($i=0; $i < count($result) ; $i++) {
			echo "<div>";
			echo $result[$i][0];
			echo "<img src= 'uploads/".$result[$i][1]."'>";
			echo "</div>";
		}
		    
		
		?>
	</div>
</body>
</html>

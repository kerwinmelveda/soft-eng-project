<?php
$db = mysqli_connect('localhost','root','','auctioned') or die ('Error Connection');
?>


<html>
<head>
</head>
<body>

	<?php
		$sql = "SELECT * FROM users";
		mysqli_query($db, $sql) or die('error');
		$result = mysqli_query($db, $sql);
		while ($row = mysqli_fetch_array($result)) {
			echo $row['userid'] . ' ' . $row['name'] . ' ' . $row['username'] . ' ' . $row['userpassword'] . ' ' . $row['useremail'] .'<br />';
		}
		
		mysqli_close($db);
	?>
</body>
</html>	

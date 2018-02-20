<!DOCTYPE html>
<html>
<head>

<style>
	table { width: 100%; border-collapse: collapse; }
	table, td, th { border: 1px solid black; padding: 5px; }
	th { text-align: left; }
</style>

</head>
<body>

<?php
	$db = mysqli_connect('localhost','root','','auctioned') or die ('Error Connection');
	$sql="SELECT  *  FROM  users";
	mysqli_query($db, $sql) or die('error');
	$result = mysqli_query($db, $sql);

	while($rows=mysqli_fetch_array($result)){
		echo  $rows['userid'];
		echo  $rows['name'];
		echo  $rows['username'];
		echo  $rows['userpassword'];
		cho  $rows['useremail']; 
	}
	
?>

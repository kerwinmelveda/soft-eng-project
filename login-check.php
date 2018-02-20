<?php
$db = mysqli_connect('localhost','root','','softeng') or die ('Error Connection');
session_start(); 
if($_SERVER["REQUEST_METHOD"]  ==  "POST") {

$username=mysqli_real_escape_string($db, $_POST['username']);
$password=mysqli_real_escape_string($db, $_POST['password']); 

if($username == "admin" && $password == "admin123") {
	header("location:  admin-access-screen.php");	
} else {
	$sql="SELECT * FROM  users  WHERE  username='$username'  and  password='$password'"; 
	$result=mysqli_query($db,$sql); 

	$row=mysqli_fetch_array($result,MYSQLI_ASSOC); 
	$active=$row['idnum']; 
	$count=mysqli_num_rows($result); 

	if($count==1) {
		$_SESSION['login_user']=$username;
		header("location:  user-screen.php?remark_login=successful" );
	} else {
		header("location:  index.php?remark_login=failed");	
	}
}

}

?>
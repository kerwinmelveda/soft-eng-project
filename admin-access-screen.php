<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/user-screen.css">
`
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/user-screen.js"></script>
	
	<style rel="stylesheet" href="css/bootstrap.min.css">
	.col-sm-7 p {	color: #000;	font-size: 10px;	line-height: 1.375em;	font-weight: 400;	}
	</style>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!--<a class="navbar-brand" href="#">Logo</a>-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Home</a></li>-->
        <!--<li><a href="#">Messages</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">    
	<div class="row">
	
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">My Profile</a></p>
        <img src="img/kerwin.jpg" class="img-circle" height="100" width="100" alt="Avatar">
      </div>
    </div>
	
    <div class="col-sm-7">
	
		<div class="row">
			<div class="col-sm-12">
			<div class="well">
				<h4>Users</h4>
					<form role="form" method="post" action="">
						<div class="form-group">
							<label for="username">Username:</label>
							<input type="username" class="form-control" name="username" id="username" placeholder="Enter your username you wish to delete" required>
						</div>
						<input  name="submit"  type="submit"  value="DELETE"  id="st-btn"/>
					</form><br />
				<table border="2"  align="center"  cellpadding="3"  cellspacing="2">
					<tr>
						<td width="300">
							<p>ID Number</p> 
						</td>
						<td width="300">
							<p>Name</p> 
						</td>
						<td width="300">
							<p>Username</p> 
						</td>
						<td width="300">
							<p>Password</p> 
						</td>
						<td width="300">
							<p>Email Address</p> 
						</td>
					</tr>
					
					<?php
					$db = mysqli_connect('localhost','root','','auctioned') or die ('Error Connection');
					$sql="SELECT  *  FROM  users";
					mysqli_query($db, $sql) or die('error');
					$result = mysqli_query($db, $sql);

					while($rows=mysqli_fetch_array($result)){
					?>
					
					<tr>
						<td width="300">
							<p><?php  echo  $rows['userid'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['name'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['username'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['userpassword'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['useremail'];  ?></p> 
						</td>
					</tr>
					
					<?php } ?>
				</table>

			</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
			<div class="well">
				<h4>Items</h4>
				<table border="2"  align="center"  cellpadding="3"  cellspacing="2">
					<tr>
						<td width="300">
							<p>ID Number</p> 
						</td>
						<td width="300">
							<p>Item Name</p> 
						</td>
						<td width="300">
							<p>Description</p> 
						</td>
						<td width="300">
							<p>Minimu Price</p> 
						</td>
						<td width="300">
							<p>Date Added</p> 
						</td>
						<td width="300">
							<p>Expiration</p> 
						</td>
						<td width="300">
							<p>Last Highest Bid</p> 
						</td>
						<td width="300">
							<p>Last Highest Bidder</p> 
						</td>
						<td width="300">
							<p>Statatus</p> 
						</td>
						<td width="300">
							<p>Item Image</p> 
						</td>
					</tr>
					
					<?php
					$db = mysqli_connect('localhost','root','','auctioned') or die ('Error Connection');
					$sql="SELECT  *  FROM  users";
					mysqli_query($db, $sql) or die('error');
					$result = mysqli_query($db, $sql);
					
					if($result != null) {
						echo "No Items in the Database";
					} else {
					while($rows=mysqli_fetch_array($result)){
					?>
					
					<tr>
						<td width="300">
							<p><?php  echo  $rows['userid'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['name'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['username'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['userpassword'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['useremail'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['useremail'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['useremail'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['useremail'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['useremail'];  ?></p> 
						</td>
						<td width="300">
							<p><?php  echo  $rows['useremail'];  ?></p> 
						</td>
					</tr>
					
					<?php }} ?>
					
			
				</table>

			</div>
			</div>
		</div>

    </div>
	
    </div>
</div>

<footer class="container-fluid text-center">
  <p></p>
</footer>

</body>
</html>
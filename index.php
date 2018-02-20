<?php
include  "login-check.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CCPulse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  
<script>
</script>
  
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="jumbotron text-center" style="background-image: url('img/main-bkg.png')">

  <div class="col-sm-4 text-left">

    <div id="login" class="container">
      <form role="form" method="post" action="">
        
        <div class="avatar">
          <img src="img/logo.jpg">
        </div>
      
        <input type="text" name="username" placeholder="username" required maxlength="20">
        <input type="password" name="password" placeholder="password" required maxlength="20">
        <div class="bar">
          <i></i>
        </div>
        <input  name="submit"  type="submit"  value="Login"  id="st-btn"/>
        <a href="registration.php">Forgot Password or Username?</a>
      </form>
    </div>
  </div>

  <img class="image-responsive" id="banner" src="img/icon-call-center.png" alt="Website Logo" style="width:500px;height:300px;"><br>
  <p><strong>"Delivering Ease, Value, and Expertise."</strong></p> 

</div>

<div id="about" class="container-fluid2 text-center">
  <h3>CCPulse: AHT Tracking and Targeting System</h3><br>
  <p>A prosposed web-based system that aims to help administrators and/or management in call centers in setting the targets and tracking the Average Handing Timme of their agents. This proposed software was made by the students of New Era University for the fullfilment of the requirements in Software Engineering. Any materials, pictures, and such are just used for research purposes only.</p>
  <br>
</div>

<footer class="text-center">
</footer>

</body>
</html>

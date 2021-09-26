<?php
  include "conect.php";
  session_start();
  if(!isset($_SESSION["a_id"])){
    echo "<script>window.open('admin_login.php','_self')</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark" style="padding:0; height:60px;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
      <div class="col-md-4 float-left text-white">
        <h4><b>Airline Ticketing Dashboard</b></h4>
      </div>
	  	<div class="col-md- float-right text-white">
	  		<a href="logout.php" class="text-white"><?php echo $_SESSION['username'];?> Logout</a>
	    </div>
    </div>
  </div> 
</nav>
<div id="sidebar">
    <a href="#" class="bar-item home">Home</a>
    <a href="#" class="bar-item">Home</a>
    <a href="#" class="bar-item">Home</a>
    <a href="#" class="bar-item">Home</a>
  </div>
<!-- FOOTER -->
<div class="container-fluid" id="footer">
    <div class="row p-3 bg-dark">
        <div class="col">
            <p style="text-align: center; font-size: 10px; color: #fff">Airline &copy; 2021,All Right Reserved</p>
        </div>
    </div>
</div>
</body>
</html>
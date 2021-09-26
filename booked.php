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
    <title>Admin | Airline Tickecting</title>
</head>
<body>
  <!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark" style="padding:0; height:60px;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
      <div class="col-md-4 float-left text-white">
        <h4><b>Airline Ticketing Dashboard</b></h4>
      </div>
	  	<div class="col-md- float-right text-white">
	  		<b><a href="logout.php" class="text-white"><?php echo $_SESSION['username'];?> Logout</a></b>
	    </div>
    </div>
  </div> 
</nav>
<!-- SIDEBAR -->
<div id="sidebar">
    <a href="admin_home.php" class="bar-item">Home</a>
    <a href="booked.php" class="bar-item active">Booked</a>
    <a href="flight.php" class="bar-item">Flights</a>
    <a href="airport.php" class="bar-item">Airport</a>
  </div>
  <!-- SIDE CONTENT -->
  <div class="card">
      <div class="card-body">
          <div class="card-header">
              <h5 class="card-title"><b>Booked Flights List</b></h5>
          </div>
          <div class="card-body">
              <table class="table table-bordered">
                  <colgroup>
                    <col width="10%">
                    <col width="30%">
                    <col width="40%">
                    <col width="20%">
                  </colgroup>

                  <thead>
                      <tr>
                          <th class="text-center">#</th>
                          <th class="text-center">Information</th>
                          <th class="text-center">Flight Info</th>
                          <th class="text-center">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
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
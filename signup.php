<?php
    include 'conect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Airline Ticketing</title>
</head>
<body>
    <!-- NAVBAR -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html" style="color:#fff;"><h2>Airline Ticketing</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#list" aria-controls="list" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-md-end" id="list">
            <ul class="navbar-nav">
                <li class="nav-item active text-center">
                    <a class="nav-link" href="index.html"><h5>Home</h5></a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="login.php"><h5>Book a Flight</h5></a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="about.html"><h5>About Us</h5></a>
                </li>
            </ul>   
        </div>
    </div>
</nav>
<!-- INDEX CONTENT -->
<div class="container-fluid">
    <div class="row align-items-center p-4"style="background: url('./img/air4.jpg') no-repeat center center/cover; height: 600px;" >
        <div class="col-md-6 offset-md-3 p-2 text-center" style="background: #fff; opacity:0.8; border: #444 solid 1px; border-radius: 10px;">
            <h1 style="color: black;"><span style="color: #444;">Register</span> With Us</h1><br>
            <?php
                if(isset($_POST["submit"])){
                    $fname=$_POST["fname"];
                    $lname=$_POST["lname"];
                    $uname=$_POST["uname"];
                    $pass=$_POST["pass"];
                    $email=$_POST["email"];
                    $num=$_POST["num"];
                    $passportnum=$_POST["passportnum"];
                    $homenum=$_POST["homenum"];
                    $sname=$_POST["sname"];
                    $city=$_POST["city"];

                    $sql="INSERT INTO users(firstname,lastname,username,password,email,phone,passport,home_phone,streetname,city)
                            VALUE ('{$fname}','{$lname}','{$uname}','{$pass}','{$email}','{$num}','{$passportnum}','{$homenum}','{$sname}','$city')";
                            if($db->query($sql)){
                                echo "<p style='color:green;'>Registration successful</p>";
                            }else{
                                echo "<p style='color:red;'>Registration failed</p>";
                            }

                }
            ?>
            <h5>Please fill out the form below to register</h5>
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
                
                    <div class="row">
                        <div class="col-md-6 mb-3 form-group">
                            <input class="form-control" type="text"  name="fname"  placeholder="First Name" required>
                        </div>
                        <div class="col-md-6 mb-3  form-group">
                            <input class="form-control" type="text"  name="lname"  placeholder="Last Name" required>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6 mb-3 form-group">
                            <input class="form-control" type="text"  name="uname"  placeholder="User Name" required>
                        </div>
                        <div class="col-md-6 mb-3  form-group">
                            <input class="form-control" type="password"  name="pass"  placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3 form-group">
                            <input class="form-control" type="email"  name="email"  placeholder="Email Address" required>
                        </div>
                        <div class="col-md-6 mb-3  form-group">
                            <input class="form-control" type="number"  name="num"  placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3 form-group">
                            <input class="form-control" type="text"  name="passportnum"  placeholder="Passport Number" required>
                        </div>
                        <div class="col-md-6 mb-3  form-group">
                            <input class="form-control" type="number"  name="homenum"  placeholder="Home Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3 form-group">
                            <input class="form-control" type="text"  name="sname"  placeholder="Street Name" required>
                        </div>
                        <div class="col-md-6 mb-3  form-group">
                            <input class="form-control" type="text"  name="city"  placeholder="City" required>
                        </div>
                    </div>
                    
                    <div class="col-md-12 mb-3 text-center">
                        <button class="btn" style="background-color: #444; color: #fff;" type="submit" name="submit">Register</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- FOOTER -->
<div class="container-fluid">
    <div class="row p-3 bg-dark">
        <div class="col">
            <p style="text-align: center; font-size: 10px; color: #fff">Airline &copy; 2021,All Right Reserved</p>
        </div>
    </div>
</div>
</body>
</html>
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
        <a class="navbar-brand" href="index.html" style="color:#fff;"><h2>Airline Ticket</h2></a>
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
    <div class="row align-items-center"style="background: url('./img/air4.jpg') no-repeat center center/cover; height: 550px;" >
    <div class="col-md-4 offset-md-4 pt-3" style="background: #fff; width:; opacity:0.8; border: #444 solid 1px; border-radius: 10px;">
        <h1 class="text-center" style="color: black;"><span style="color: #444;">Admin </span>Log In</h1><br>
        <form action="">
            <div class="col-md-6 offset-md-3 mb-3 form-group">
                <input class="form-control" type="text"  name="username"  placeholder="Username" required style="border-color: #444;" >
            </div>
            <div class="col-md-6 offset-md-3 mb-3 form-group">
            <input class="form-control" type="password"  name="password"  placeholder="password" required style="border-color: #444;" >
            </div>
            <div class="col-md-6 offset-md-3 mb-3 ">
                <button class="btn form-control" style="background-color: #444; color: #fff;">Log In</button>
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
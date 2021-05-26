<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ali Public</title>
    <!--fav icon which will be displayed up at the page-->
    <link rel="shortcut icon" type="image/png" href="images/logotop.png">    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-style navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='aboutus'){echo 'active';}?>" href="aboutus.php"><i class="fas fa-graduation-cap"></i>About Us</a>
                </li>                               
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='gallery'){echo 'active';}?>" href="gallery.php"><i class="fas fa-camera-retro"></i>Gallery</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='contactus'){echo 'active';}?>" href="contactus.php"><i class="fa fa-fw fa-envelope"></i>Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
        <li data-target="#slides" data-slide-to="3"></li>
        <li data-target="#slides" data-slide-to="4"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/latest images/logo - Copy.png" >
            <div class="carousel-caption">
                <!-- <h1 class="display-2">Ali Public School Chiplun</h1>
                <h3>Showering Knowledge In Excellence</h3> -->
                <!-- <button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO.</button>
                <button type="button" class="btn btn-dark btn-lg">Get Started.</button> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/latest images/a2.jpg" >
        </div>
        <div class="carousel-item">
            <img src="images/latest images/a3.jpg" >
        </div>
        <div class="carousel-item">
            <img src="images/latest images/a4.jpg" >
        </div>
        <div class="carousel-item">
            <img src="images/latest images/a5.jpg" >
        </div>

        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        

    </div>
</div>
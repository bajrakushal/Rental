<?php session_start()?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Car Rental || Post Your Cars</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/front/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/front/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/front/css/fontAwesome.css">
        <link rel="stylesheet" href="assets/front/css/hero-slider.css">
        <link rel="stylesheet" href="assets/front/css/owl-carousel.css">
        <link rel="stylesheet" href="assets/front/css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="assets/front/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.php"><div class="logo">
                            <h1 style="color: #4883ff;">Ezy Rentals</h1>
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="index.php">Home</a></li>
                                <li><a href="cars.php">Cars</a></li>
                                <li><a href="about-us.php">About us</a></li>
                                <li><a class="nav-link" href="contact.php">Contact Us</a></li>
                                <?php if(isset($_SESSION['cid'])):?>
                                    <li><a class="nav-link" href="logout.php">Logout</a></li>
                                <?php else:?>
                                    <li><a class="nav-link" href="login.php">Login</a></li>
                                <?php endif?>
                                <li>
                                    <form action="search.php" method="post">
                                        <input type="text" name="search_item"  style="height: 35px; border-radius: 10px;" placeholder="Search Something....." required>
                                        <input type="submit" name="search" value="Search" class="btn btn-primary btn-sm">
                                    </form>
                                </li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
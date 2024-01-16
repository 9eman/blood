<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Page Title -->
    <title>Healthcare Management</title>

    <!-- Favicon -->

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/Physiotherapy.css">
</head>
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us +968 9661 6165</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> 19f19350@mec.edu.om</h6>
                        <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span> Muscat</h6>
                    </div>
                    <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="https://ar-ar.facebook.com/OmanHealth/photos/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/OmaniMOH"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/omanimoh/?hl=ar"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/OmaniMOH"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="?p=home"><img src="" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="?p=home">Home</a></li>
                        <li><a href="?p=feedback">feedback</a></li>
                        <li><a href="https://www.google.com/?hl=ar">more information </a></li>
                        <?php if($_SESSION['logged_in']): ?>
                        <li class="mb-2"><a href="?p=admin">Dashboard</a></li>
                        <?php else: ?>
                        <li class="mb-2"><a href="?p=login">login</a></li>
                        <?php endif; ?>
                    </ul>
                </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h4>Caring for better life</h4>
                    <h2> Healthcare Management</h2>
                    <p>Let's work together to make life easier.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
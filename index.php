<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/edu-academy/inc/config.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>./assets/css/style.css">

    <title>Edu. Academy</title>
   <link rel="shortcut icon" href="./assets//images//dashbord-logo.png" type="image/x-icon">
</head>

<body>

    <!-- Header -->
    <!-- Navigation Sectoin -->
    <header class="header">
        <section class="header-top  bg-light" id="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Nav Start -->
                        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
                            <div class="container">
                            <a class="navbar-brand" href="<?php echo SITE_URL; ?>">
                                <img class="edu" src="./assets/images/Edu.png" alt="#">
                                <span class="logo">Academy</span> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav m-right main-nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="./index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./about.php">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./students.php">Students</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./admission.php">Admission</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./gallary.php">Gallary</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./contact-us.php">Contact Us</a>
                                    </li>

                                </ul>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item ">
                                        <a class="nav-link login-link" href="./login.php">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link join-link" href="./contact-us.php">JOIN US</a>
                                </ul>
                            </div>
                            </div>
                        </nav>
                        <!-- Nav End -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero -->
        <section class="hero" id="hero">

            <div class="container">
                <div class="intro">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="magnet">
                                Join Us
                            </h5>
                            <h1 class="hero-title">
                                25K+ STUDENTS TRUST US
                            </h1>
                            <h4 class="hero-subtitle">
                                Every day brings with it a fresh set of learning possibilities.
                            </h4>
                            <div class="hero-cta">
                                <a href="./admission.php" class="btn btn-cta">Get Started Now</a>
                                <a href="./about.php" class="btn btn-outline-cta">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-icon">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="card-title">Expert instruction</h5>
                                    <p class="card-text">
                                        The gradual accumulation of information about atomic and small-scale behaviour...
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-icon">
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="card-title">Training Courses</h5>
                                    <p class="card-text">
                                        The gradual accumulation of
                                        information about atomic and
                                        small-scale behaviour...
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-icon">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="card-title">Expert instruction</h5>
                                    <p class="card-text">
                                        The gradual accumulation of information about atomic and small-scale behaviour...
                                    </p>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </section>
    </header>


    <!--Stats  -->
    <section class="Stats" id="Stats">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <p class="maetrics">15K</p>
                    <p class="metric-title">Happy Customers</p>
                </div>
                <div class="col-md-3">
                    <p class="maetrics">150K</p>
                    <p class="metric-title">Monthly Visitors</p>
                </div>
                <div class="col-md-3">
                    <p class="maetrics">15</p>
                    <p class="metric-title">Countries Worldwide</p>
                </div>
                <div class="col-md-3">
                    <p class="maetrics">100+</p>
                    <p class="metric-title">Top Partners</p>
                </div>

            </div>
        </div>

    </section>


    <!-- Clients -->

    <section class="Clients" id="Clients">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="clients-section">

                        <div class="divider">

                        </div>
                        <h2 class="client-sectoin-title">Every Client Matters

                        </h2>
                        <p class="client-desc">Problems trying to resolve the conflict between
                            the two major realms of Classical physics:
                            Newtonian mechanics
                        </p>
                      
                    </div>
                </div>


                <div class="col-md-7">
                    <img class="img-fluid client-thumb" src="./assets/images/clients-img.png" alt="Clients Thums">
                </div>
            </div>
        </div>

    </section>


    <!-- Courses -->
    <section class="Courses" id="Courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="section-tag">Practice Advice</h6>
                    <h2 class="section-title">Our Experts Courses</h2>
                    <p class="sectoin-desc">Problems trying to resolve the conflict between <br>
                        the two major realms of Classical physics: Newtonian mechanics
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card course-card">
                        <div class="card-img course-img" style="background-image: url('./assets/images/course-img1.png');">
                            <p class="card-tag sale-tag">Sale
                            </p>
                            <ul class="list-unstyled sale-icon">
                                <li>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">

                            <div class="course-header">
                                <h6 class="card-subtitle mb-2 text-muted">Training Courses</h6>
                                <p class="badge badge-pill badge-dark"><i class="fa fa-star" aria-hidden="true"></i>4.9</p>
                            </div>
                            <h5 class="card-title">Get Quality Education</h5>
                            <p class="card-text">We focus on ergonomics and meeting
                                you where you work. It's only a
                                keystroke away.
                            </p>
                            <div class="sales">
                                <i class="fa fa-download" aria-hidden="true">15 Sales

                                </i>
                            </div>
                            <div class="price">
                                <span class="regular-price">$16.48</span>
                                <span class="sales-price">$6.48</span>
                            </div>
                            <div>
                                <a href="#" class="learn-link">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card course-card">
                        <div class="card-img course-img" style="background-image: url('./assets/images/course-img2.png');">
                            <p class="card-tag sale-tag">Sale
                            </p>
                            <ul class="list-unstyled sale-icon">
                                <li>
                                    <a href="#"> <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">

                            <div class="course-header">
                                <h6 class="card-subtitle mb-2 text-muted">2,769 online courses </h6>
                                <p class="badge badge-pill badge-dark"><i class="fa fa-star" aria-hidden="true"></i>4.9</p>
                            </div>
                            <h5 class="card-title">Get Quality Education</h5>
                            <p class="card-text">We focus on ergonomics and meeting
                                you where you work. It's only a
                                keystroke away.
                            </p>
                            <div class="sales">
                                <i class="fa fa-download" aria-hidden="true">15 Sales

                                </i>
                            </div>
                            <div class="price">
                                <span class="regular-price">$16.48</span>
                                <span class="sales-price">$6.48</span>
                            </div>
                            <div>
                                <a href="#" class="learn-link">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card course-card">
                        <div class="card-img course-img" style="background-image: url('./assets/images/course-img3.png');">
                            <p class="card-tag sale-tag">Sale
                            </p>
                            <ul class="list-unstyled sale-icon">
                                <li>
                                    <a href="#"> <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">

                            <div class="course-header">
                                <h6 class="card-subtitle mb-2 text-muted">Expert instructions</h6>
                                <p class="badge badge-pill badge-dark"><i class="fa fa-star" aria-hidden="true"></i>4.9</p>
                            </div>
                            <h5 class="card-title">Get Quality Education</h5>
                            <p class="card-text">We focus on ergonomics and meeting
                                you where you work. It's only a
                                keystroke away.
                            </p>
                            <div class="sales">
                                <i class="fa fa-download" aria-hidden="true">15 Sales

                                </i>
                            </div>
                            <div class="price">
                                <span class="regular-price">$16.48</span>
                                <span class="sales-price">$6.48</span>
                            </div>
                            <div>
                                <a href="#" class="learn-link">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="team" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="section-tag">Team</h6>
                    <h2 class="section-title">Our Popular Teacher</h2>
                    <p class="sectoin-desc">Problems trying to resolve the conflict between <br>
                        the two major realms of Classical physics: Newtonian mechanics
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="team-card">
                            <img src="./assets/images/teacher-1.avif" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Liana Leo</h5>
                                <p class="card-text">Teacher</p>
                                <ul class="list-unstyled social-section">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#">

                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="./assets/images/teacher-4.avif" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Debraj Sahai</h5>
                            <p class="card-text">Teacher</p>
                            <ul class="list-unstyled social-section">
                                <li>
                                    <a href="#">
                                        <i class="fa  fa-facebook-official" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>

                                </li>
                                <li>
                                    <a href="#">

                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="./assets/images/teacher-3.avif" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Toru kumar</h5>
                            <p class="card-text">Teacher</p>
                            <ul class="list-unstyled social-section">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>

                                </li>
                                <li>
                                    <a href="#">

                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="./assets/images/teacher-2.avif" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sofia Julian</h5>
                            <p class="card-text">Teacher</p>
                            <ul class="list-unstyled social-section">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>

                                </li>
                                <li>
                                    <a href="#">

                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Newsletter -->
    <section class="newsletter" id="newsletter">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <h6 class="section-tag text-center">Newsletter</h6>
                    <h2 class="section-title text-center">Watch our Courses</h2>
                    <p class="sectoin-desc text-center">Problems trying to resolve the conflict between <br>
                        the two major realms of Classical physics: Newtonian mechanics
                    </p>
                    <form class="form-inline subscription-form">
                        <input class="form-control search" type="search" placeholder="Your Email" aria-label="Search">
                        <button class="btn btn-subscribe " type="submit">Search</button>
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-8">

                </div>

            </div>
        </div>
    </section>

    <!--  footer  -->

    <footer>

        <!--  footer top -->
        <section class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-md-2">
                        <ul class="footer-nav">
                            <h5>Company Info</h5>
                            <li>
                                <a href="#">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Carrier
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    We are hiring
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-2">
                        <ul class="footer-nav">
                            <h5>Legal</h5>
                            <li>
                                <a href="#">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Carrier
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    We are hiring
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>


                    </div>
                    <div class="col-md-2">
                        <ul class="footer-nav">
                            <h5>Features</h5>
                            <li>
                                <a href="#">
                                    Business Marketing
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    User Analytic
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Live Chat
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Unlimited Support
                                </a>
                            </li>
                        </ul>


                    </div>
                    <div class="col-md-2">
                        <ul class="footer-nav">
                            <h5>Resources</h5>
                            <li>
                                <a href="#">
                                    IOS & Android
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Watch a Demo
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Customers
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    API
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-4">
                        <div class="footer-address">
                            <h5>Get In Touch</h5>
                            <div class=" d-flex phone">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h6>(480) 555-0103</h6>
                            </div>
                        </div>

                        <div class="footer-address">
                            <div class="d-flex map">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h6>4517 Washington Ave. Manchester,
                                    Kentucky 39495</h6>
                            </div>
                        </div>

                        <div class="footer-address">
                            <div class="d-flex email">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h6>debra.holt@example.com</h6>
                            </div>
                        </div>




                    </div>
                </div>
            </div>

        </section>
        <!-- Footer copyright -->
        <section class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <p class="copyright-text">Made With Love By Edu. Academy All Right Reserved </p>
                    </div>
                    <div class="col-md-5">
                        <ul class="list-unstyled social-section text-center">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>

                            </li>
                            <li>
                                <a href="#">

                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>


    </footer>

    <!-- Javascript start -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>
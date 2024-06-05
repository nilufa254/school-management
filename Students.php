<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/edu-academy/inc/config.php';

if ($conn = dbConnect()) {


    $query = "SELECT `student`.*, `section`.`name` as section_name, `class`.`name` as class_name FROM `student` JOIN `section` ON `section`.ID = `student`.`section_id` JOIN `class` ON `class`.ID = `section`.`class_id` WHERE 1;";

    $result = mysqli_query($conn, $query);

    $studentsSorted = [];
    $students = [];

    if (mysqli_num_rows($result) > 0) {
        $i = 1;
        while ($student = mysqli_fetch_assoc($result)) {
            $studentsSorted[] = $student;
        }
    }

    mysqli_close($conn);

    foreach ($studentsSorted as $key => $student) {
        $students[$student['class_name']]['class_name'] = $student['class_name'];
        foreach ($student as $infoKey => $studentInfo) {
            $students[$student['class_name']][$key][$infoKey] = $studentInfo;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>./assets/css/style-1.css">
    <title>Edu. Academy</title>
    <link rel="shortcut icon" href="./assets/./images//dashbord-logo.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <section class="header-top " id="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Nav Start -->
                        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
                            <div class="container">
                                <a class="navbar-brand" href="#">
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
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">
                            Our Students
                        </h1>


                    </div>

                </div>
            </div>


        </section>

        <!-- Students Section -->
        <?php if (!empty($students)) { ?>
            <section class="student " id="student">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="section-title text-center">Our Students</h6>
                            <p class="section-desc text-center">
                                Problems trying to resolve the conflict between <br>
                                the two major realms of Classical physics: Newtonian mechanics
                            </p>

                        </div>
                    </div>
                   
                    <?php foreach ($students as $studentsSorted) { ?>
                        <div class="row">
                            <div class="col-md-11 ">
                                <h4 class="cls-name"><?php echo ucfirst($studentsSorted['class_name']); ?></h4>
                            </div>
                        </div>
                        <?php unset($studentsSorted['class_name']); ?>
                        <div class="row">

                            <?php foreach ($studentsSorted as $student) { ?>
                                <div class="col-md-3">
                                    <div class="card custom-card">
                                        <img src="<?php echo $student['image']; ?>" class="card-img-top" alt="<?php echo $student['name']; ?>">
                                        <div class="card-body text-center">
                                            <h5><?php echo $student['name']; ?></h5>
                                            <p class="student-p"><?php echo $student['section_name']; ?></p>
                                            <p><?php echo $student['class_name']; ?></p>
                                            

                                        </div>
                                    </div>
                                    <!-- <div class="contant">
                                        <h4><?php echo $student['name']; ?></h4>
                                        <p><?php echo $student['class_name']; ?></p>
                                        <p><?php echo $student['section_name']; ?></p>
                                    </div> -->
                                </div>
                            <?php } ?>
                        </div>

                    <?php } ?>

                <?php } ?>




                </div>

            </section>


            <!-- Footer -->

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
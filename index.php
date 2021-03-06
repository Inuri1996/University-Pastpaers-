<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>index</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <img src="img/core-img/logo2n.jpg" alt="">
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">

                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    
                                    <li><a href="blog.html">Blog</a></li>
                                            
                                   
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                             <div class="single-mega cn-col-4">
                                                <img src="img/index/menu1.jpg" alt="">
                                            </div>

                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">UNIVERSITY OF SOUTH EASTERN</a></li>
                                                <li><a href="#">UNIVERSITY OF KELANIYA</a></li>
                                                <li><a href="#">UNIVERSITY OF UWA</a></li>
                                               
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">UNIVERSITY OF RUHUNA</a></li>
                                                <li><a href="#">UNIVERSITY OF WATYABA</a></li>
                                                <li><a href="#">UNIVERSITY OF JAYAWARDANAPURA</a></li>
                                                
                                            </ul>
                                           
                                            <div class="single-mega cn-col-4">
                                                <img src="img/index/menu1.jpg" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="courses.html">Universitys</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    
                                    <li><a  href="logout.php"> LOGOUT</a></li>
                                  
                               
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                             <p><i>University</i></p> 
                                <p><i>Past papers</i></p> 
                            </div>
                        </div>

                       <!--  <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                 <p>onlineunipastpapers@gmail.com</p>
                            </div> -->


                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/index/se2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">  South eastern University</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>Online Past papers Collection</h2>
                                <a href="about.html" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/index/p3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms"> Peradeniya university</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>Online Past papers Collection</h2>
                                <a href="about.html" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        


            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/index/u8.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms"> Uwa University</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>Online Past papers Collection</h2>
                                <a href="about.html" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/index/r2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">  Ruhuna University</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>Online Past papers Collection</h2>
                                <a href="about.html" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- ##### Hero Area End ##### -->


    <!-- ##### Course Area Start ##### -->
    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
               
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="course-icon">
                            <i class="icon-responsive"></i>
                        </div>
                        <div class="course-content">
                           <a href="Assignment.html"> <h4>Assignment</h4></a>
                            
                        </div>
                    </div>
                </div>
               
                
    <!-- ##### Course Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/index/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                        <span>OUR HELPES.....</span>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                        <div class="testimonial-thumb">
                            <img src="img/index/t3.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5> priyadarshani</h5>
                            <p> kalaniya University</p>
                            <h6><span>Faculty of</span> Technology</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
                        <div class="testimonial-thumb">
                            <img src="img/index/t4.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5>Hansani</h5>
                            <p> south eastern University</p>
                            <h6><span>Faculty of</span>Technology </h6>
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                        <div class="testimonial-thumb">
                            <img src="img/index/t1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5> Jayasooriya</h5>
                            <p>wayaba University </p>
                            <h6><span>Faculty of</span> Technology</h6>
                        </div>
                    </div>
                </div>

                 <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                        <div class="testimonial-thumb">
                            <img src="img/index/t1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5> kularathna</h5>
                            <p>vavniya campus </p>
                            <h6><span>Faculty of</span> Technology</h6>
                        </div>
                    </div>
                </div>
                 <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                        <div class="testimonial-thumb">
                            <img src="img/index/t1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5> ravishani</h5>
                            <p>uwa University </p>
                            <h6><span>Faculty of</span> Technology</h6>
                        </div>
                    </div>
                </div>

                 <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                        <div class="testimonial-thumb">
                            <img src="img/index/t1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5> achini</h5>
                            <p>jayawardanapura University </p>
                            <h6><span>Faculty of</span> Technology</h6>
                        </div>
                    </div>
                </div>
              
            
        </div>
    </div>
    <!-- ##### Testimonials Area End ##### -->

   
   
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
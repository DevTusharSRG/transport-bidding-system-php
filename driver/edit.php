<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transportation HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php 
session_start();
include("header.php");
include("connection.php");
$email=$_SESSION["email"];
$rs=mysqli_query($cn,"select * from rprofile where email='$email'");

if($a=mysqli_fetch_array($rs))
{
    extract($a);
}
?>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<main>
    
        <!--? contact-form start -->
    <section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row justify-content-end">
                <!-- Contact wrapper -->
                <div class="col-xl-8 col-lg-9">
                    <div class="contact-form-wrapper">
                        <!-- From tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-50">
                                    
                                    <h2>Your Profile</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- form -->
                        <form action="#" class="contact-form" method="post" enctype="multipart/form-data">
                            <div class="row ">
                            <div class="col-lg-12">
                                    <div class="input-form">
                                   <?php
                                   if($photo==NULL)
                                   {
                                    echo '<img src="user.png">';
                                   } 
                                   else
                                   
                                    echo "<tr><img src=../images/$photo height=100px width=100px border=2px solid red></tr><br>"; ?><p>Profile Image</p>
                                   </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                    <p>Name : <?php echo $name;?></p>
                                    
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <p>email : <?php echo $email;?></p>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                    <p>Contact No : <?php echo $contact;?></p>
                                    
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                    <p>Address : <?php echo $address;?></p>
                                    
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                    <p>Adhar No : <?php echo $adhar;?></p>
                                    
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="select-items">
                                    <p>user type : <?php echo $omg;?></p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="input-form">
                                    <p>Password : <?php echo $pass;?></p>
                                    
                                    </div>
                                </div>
                                <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="dprofile.php" class="btn header-btn">Edit Profile</a>
                                </div>
                            </div>
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form end -->
    </main>


<?php
include("footer.php");
?>


<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>
</html>


<?php


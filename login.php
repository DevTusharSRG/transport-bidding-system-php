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
?>

<?php
if(isset($_POST["submit"]))
{
$email=$_POST['email'];
$password=$_POST['password'];
include("connection.php"); 
$q="select * from rprofile where email='$email' and pass='$password'";
$result=mysqli_query($cn,$q);
if(mysqli_num_rows($result)>0)
{
   $a=mysqli_fetch_array($result);
   if($a["omg"]=="driver")
  {
     $_SESSION['email']=$email;
     echo"<script> window.location='driver/index.php'</script>";
  }
   elseif($a["omg"]=="customer")
  {
    $_SESSION['email']=$email;
    echo"<script> window.location='customer/index.php'</script>";
  }
  elseif($a["omg"]=="admin")
  {
    $_SESSION['email']=$email;
    echo"<script> window.location='admin/index.php'</script>";
  }
}
else
{
echo"<center><b><font color=red>Incorrect username or password</font></b></center>";
mysqli_close($cn);
}

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
                                    
                                    <h2>Login Here</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- form -->
                        <form action="#" class="contact-form" method="post">
                            <div class="row ">
                                
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="email" name="email" placeholder="Enter your email">
                                    </div>
                                </div>
                                
                                
                               
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <input type="submit" name="submit" class="submit-btn" value="Submit">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                    <h5><a href=forget.php>Forgot Password??</a></h5>
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



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
include("header.php");
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
                                    
                                    <h2>Register Here</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- form -->
                        <form action="#" class="contact-form" method="post" enctype="multipart/form-data">
                            <div class="row ">
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" name="cnm" placeholder="Enter your name" pattern="\D+" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="email" name="cem" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" name="ccn" placeholder="Contact Number" pattern="\d{10}" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" name="add" placeholder="enter address" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" name="adhar" placeholder="adhar Number" pattern="\d{12}" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="file" name="file1" placeholder="uploade photo" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="select-items">
                                        <select name="select" id="select">
                                            
                                            <option value="driver">Driver</option>
                                            <option value="customer">customer</option>
                                
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="password" name="cpass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <input type="submit" name="submit" class="submit-btn" value="Submit">
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

if(isset($_POST['submit']))
{
$nm=$_POST["cnm"];
$email=$_POST["cem"];
$con=$_POST["ccn"];
$add=$_POST["add"];
$adhar=$_POST["adhar"];
$pass=$_POST["cpass"];
$select=$_POST["select"];

$fn=$_FILES['file1']['name'];
$s=$_FILES['file1']['size'];
$tnm=$_FILES['file1']['tmp_name'];
$ptr1=fopen($tnm,"r");
$ptr2=fopen("images/$fn","w");
$data=fread($ptr1,$s);
fwrite($ptr2,$data);
fclose($ptr1);
fclose($ptr2);

include("connection.php");

$sel="select * from rprofile where email='$email'";
$result=mysqli_query($cn,$sel);
$num=mysqli_num_rows($result);
if($num>0)
{
    echo"<script> alert('email id already exist')</script>";
}
else
{
    $q="insert into rprofile(name,email,contact,address,adhar,photo,pass,omg) values('$nm','$email','$con','$add','$adhar','$fn','$pass','$select')";
    mysqli_query($cn,$q);
    mysqli_close($cn);
    echo"<script> alert('registration successfull');window.location='login.php'</script>";

}
}
?>

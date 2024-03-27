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
                   include("connection.php");
                   $q="select * from feedback";
                   $result=mysqli_query($cn,$q);
?>


    <main>
         <!--? Testimonial Start -->
          
    <div class="testimonial-area testimonial-padding section-bg" data-background="assets/img/gallery/section_bg04.jpg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-25">
                        <span>Clients Testimonials</span>
                        <h2>What Our Clients Say!</h2>
                    </div> 
                    <div class="h1-testimonial-active mb-70">
                        <!-- Single Testimonial -->
                        <?php
         while($a=mysqli_fetch_array($result))
                   {
                   $msg=$a['message'];
                   $nm=$a['name'];
                   $email=$a['email'];
                   
                   ?>
                        <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            
        
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p><?php echo"$msg"?></p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/Homepage_testi.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span><?php echo"$nm"?></span>
                                        <p><?php echo"$email"?></p>
                                    </div>
                                </div>
                            </div>
                        </div> <?php }?>
                        
                    </div>
                </div>
                <!-- Form Start -->
                
                <div class="col-xl-4 col-lg-5 col-md-8">
                    <div class="testimonial-form text-center">
                    <form name=f1 method=post>
                        <h3>Always listening, always understanding.</h3>
                        <input type="text"  name="msg" placeholder="Give feedback">
                        <input type="text" name="nm" placeholder="enter your name">
                        <input type="email" name="email" placeholder="enter your email">
                        <input type=submit name="submit" class="submit-btn" value="submit">
                        </form>
                    </div>
                </div>
               
                <!-- Form End -->
            </div> 
        </div> 
    </div>
   
    <!-- Testimonial End -->

       
    </main>
    <?php
include("footer.php");
?>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
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
extract($_POST);
$q="insert into feedback values('$msg','$nm','$email')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script> alert('Thank you for your valueable feedback');window.location='feedback.php'</script>";
}
?>
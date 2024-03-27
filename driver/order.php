<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transportation HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

   <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<?php
                   session_start();
                   include("connection.php");
                   $q="select * from corder";
                   $result=mysqli_query($cn,$q);
                   $email=$_SESSION["email"];
                   $rs=mysqli_query($cn,"select * from rprofile where email='$email'");

                    if($a=mysqli_fetch_array($rs))
                    {
                     extract($a);
                    }
?>
    <!-- Preloader Start -->
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
    <?php
    include("header.php");
    ?>
    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Give The Bidding</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- ================ contact section start ================= -->
      <section class="contact-section">
            
      <h2 align="center" class="contact-title">CLIENT MESSAGES</h2>
                    <div class="container">
                                                                                        
  <div class="table-responsive">          
  <table class="table">
    <thead>
                       
<tr class="tr1">
 <th class="td1"> sr.no </th> 
 <th class="td1"> order Id </th>  
<th class="td1"> start </th>
<th class="td1"> destination </th>
<th class="td1"> vehicle </th>
<th class="td1"> max </th>

<th class="td1"> SEND </th>
</tr>
</thead>
<tbody>


<?php
$i=1;
while($a=mysqli_fetch_array($result))
{
$nm=$a['start'];
$mn=$a['end'];
$vh=$a['vehicle'];
$max=$a['price'];
$oid=$a['oid'];


echo "<tr>";
echo "<td>$i</td>";
echo "<td>$oid</td>";
echo "<td>$nm</td>";
echo "<td>$mn</td>";
echo "<td>$vh</td>";
echo "<td>$max</td>";
/*echo "<td><input type=text id=send name=send placeholder=Give your bidding></td>";*/
echo "<td><a href=bid.php?oid=$oid><font color=black>give bidding</font></a></td>";

echo "</tr>";



$i++;
}

/*if(isset($_POST['btnsub']))
{
    $bid=$_POST['send'];
    
    $q="insert into bid values ('$oid','$name','$contact','$email','$bid')";
    mysqli_query($cn,$q);
    
    echo"<script> alert('Submitted successfull');window.location='index.php'</script>";

}*/


mysqli_close($cn);
?>
</tbody>
</table>
</div>

            
                  
               
            </div>
        </section>
        <!-- ================ contact section end ================= -->
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
		
		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

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

?>
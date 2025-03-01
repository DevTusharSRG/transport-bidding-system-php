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
                   $q="select * from corder";
                   $result=mysqli_query($cn,$q);
                   
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
<section class="contact-section">
<h1 align=center> bidding profile</h1>
            
                <div class="container">
                                                                                    
<div class="table-responsive">          

<?php
$i=1;
while($a=mysqli_fetch_array($result))
{

    echo "<table class='table'>";
$nm=$a['start'];
$mn=$a['end'];
$vh=$a['vehicle'];
$max=$a['price'];
$oid=$a['oid'];

echo "<tr>";
echo "<th>SR.NO</th>";
echo "<th>Order id</th>";
echo "<th>start</th>";
echo "<th>end</th>";
echo "<th>vehicle</th>";
echo "<th>price</th></tr>";

echo "<tr>";
echo "<td>$i</td>";
echo "<td>$oid</td>";
echo "<td>$nm</td>";
echo "<td>$mn</td>";
echo "<td>$vh</td>";
echo "<td>$max</td>";
echo "</tr>";
echo "</table>";
echo "<h3>bidding for this order</h3>";

echo "<table class='table'>";
echo "<tr>";
echo "<th>SR.NO</th>";
echo "<th>Order id</th>";
echo "<th>name</th>";
echo "<th>contact</th>";
echo "<th>email</th>";
echo "<th>bidding</th></tr>";
$qu="select * from bid where orid='$oid'";
                   $rs=mysqli_query($cn,$qu);

while($a=mysqli_fetch_array($rs))
{

$j=1;
    
$id=$a['orid'];
$name=$a['name'];
$con=$a['contact'];
$email=$a['email'];
$bid=$a['bidding'];



if($id==$oid){
echo "<tr>";
echo "<td>$j</td>";
echo "<td>$id</td>";
echo "<td>$name</td>";
echo "<td>$con</td>";
echo "<td>$email</td>";
echo "<td>$bid</td>";
echo "</tr>";

$j++;
   
}
}
echo "</table>";

echo"<hr>";
echo"<hr>";
$i++;
}
mysqli_close($cn);
?>


</div>

        
              
            
        </div>
    </section>

 <hr>


 
            

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
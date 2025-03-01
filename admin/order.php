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
                   $cn=mysqli_connect("localhost","root","");
                   $db=mysqli_select_db($cn,"faster1");
                   $q="select * from corder";
                   $result=mysqli_query($cn,$q);
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
       
        <!-- ================ contact section start ================= -->
        <br>
                    <div class="col-12">
                        <h2 align="center" +6class="contact-title">Orders</h2>
                    </div>
                    <div class="container"><br>
                                                                                        
  <div class="table-responsive">          
  <table class="table" border=solid black 2px>
    <thead>
<tr class="tr1">
<th class="td1">SR.NO</th>
<th class="td1">NAME</th>
<th class="td1">PHONE</th>
<th class="td1">EMAIL</th>
<th class="td1">FROM</th>
<th class="td1">TO</th>
<th class="td1">OTHER DETAILS</th>
</tr>
</thead>
<tbody>

<?php
$i=1;
while($a=mysqli_fetch_array($result))
{
$nm=$a['name'];
$mn=$a['contact'];
$add=$a['email'];
$cs=$a['start'];
$em=$a['end'];
$ps=$a['details'];

echo "<tr>";
echo "<td>$i</td>";
echo "<td>$nm</td>";
echo "<td>$mn</td>";
echo "<td>$add</td>";
echo "<td>$cs</td>";
echo "<td>$em</td>";
echo "<td>$ps</td>";
echo "</tr>";
$i++;
}
mysqli_close($cn);
?>
</tbody>
</table>
</div>
            
                  
                </div>
            
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
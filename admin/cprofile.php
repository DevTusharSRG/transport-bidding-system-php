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
    include("header.php");
    ?>
    <main>

        <!-- ================ contact section start ================= -->
        

        <section class="contact-section">
        <div class="row">
        <div class="col-12">
                        <h2 align="center" class="contact-title">CUSTOMERS PROFILE </h2>
                    </div>     
  <div class="container">
                                                                                        
  <div class="table-responsive">          
  <table class="table" border=solid black 2px>
    <thead>      
<tr class="tr1" bgcolor="orange">
<th class="td1"> PHOTO </th>
<th class="td1"> NAME </th>
<th class="td1"> EMAIL </th>
<th class="td1"> CONTACT </th>

<th class="td1"> ADHAR </th>
<th class="td1"> ADDRESS </th>
<th class="td1"> password </th>
</tr>
</thead>
<tbody>
                
                
                <?php
                   $cn=mysqli_connect("localhost","root","");
                   $db=mysqli_select_db($cn,"faster1");
                   $q="select * from rprofile where omg='customer'";
                   $rs=mysqli_query($cn,"$q");
                   while($a=mysqli_fetch_array($rs)){
                   $name=$a['name'];
                   $pass=$a['pass'];
                   $contact=$a['contact'];
                   $email=$a['email'];
                   $adhar=$a['adhar'];
                   $address=$a['address'];
                   $photo=$a['photo'];
                   
                                 
                   echo "<tr>";

                    echo "<td><img src=../images/$photo height=100px width=100px border=2px solid red></td>";
                    echo "<td>$name</td>";
                    echo "<td>$email</td>";
                    echo "<td>$contact</td>";
                    echo "<td>$adhar</td>";
                    echo "<td>$address</td>";
                    echo "<td>$pass</td>";

                    echo "</tr>";

                  }  
                  ?>
                  </tbody>
                  </table>
                
                </div>
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
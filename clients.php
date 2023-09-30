<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Our Clients | Bhavya Resources - Totally eco-friendly mining Solution ">
    <meta name="keywords" content="Our Clients | Bhavya Resources - Totally eco-friendly mining Solution ">
    <link rel="shortcut icon" href="assets/images/favicon.ico" title="Favicon" sizes="16x16"/>
    <!-- Main Page Title -->
    <title>Our Clients | Bhavya Resources - unearthing your dream </title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">


       <!-- plugins css -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- flaticon  -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css"> 

    
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  


</head>
<body>
  <?php include 'header.php'; ?>
    
    
    
    <!--==================================================================== 
							Start Header 
	=====================================================================-->
<section id="page" class="header-breadcrumb">

    
    <div class="container">
        <div class="row">
            <div class="col-lg-6"> 
            <span class="page-title-line">About us</span>
                <h1 class="page-title-heading">Our Clients
                </h1>
                
               
            </div>
        
        </div>
    
    </div>
</section>
   <!--==================================================================== 
							End Header 
	=====================================================================-->
    
    
  <!--==================================================================== 
							Start Testimonials
	=====================================================================--> 
<div id="testimonials" class="testimonials clients-page pt-120 pb-90" style="background-image: url('assets/images/icons/map_img.png');">

    <div class="container">

        
        
        <div class="row">
  
  
            <?php
    $er = "SELECT * FROM `client` ORDER BY id DESC";
    $pro = mysqli_query($con, $er);
    while ($row = mysqli_fetch_array($pro)) {
    ?>        
        <!-- New Item -->
        <div class="col-md-6 col-lg-4 mb-30"> 
        	<a href="<?= $row['url'] ?>" target="_blank">
            <div class="testmonail-box">
                  <!-- Testmonail Image -->
                <div class="client-img">
                     <img src="admin/images/<?= $row['image'] ?>" alt="<?= $row['name'] ?>" /> 
                </div>
                <div class="author-details">
                    
                    <h6><?= $row['name'] ?></h6>
                   
                </div>
                <div class="clearfix"></div>
 
            </div>
            </a>
        </div>

         <?php
		     }
		 ?>     
                    
                    
                    
                    

        </div>
    </div>
</div>
    <!--==================================================================== 
							End Testimonials
	=====================================================================-->
   
   
    
<?php include 'footer.php'; ?>
<!--==================================================================== 
                        End Footer
=====================================================================-->   
<!-- Scroll To Top -->
<div class="scroll-up">
    <i class="fas fa-angle-up"></i>
</div> 
<!--==================================================================== 
                        End Section Content
=====================================================================-->
   
    <!--====================================================================
                            Include All Js File 
     ====================================================================-->
     <!-- All Plugins -->
     <!--  jQuery js  -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- plugins Js  -->
    <script src="assets/js/plugins.js"></script>
    <!-- My Custom Js  -->
    <script src="assets/js/custom.js"></script>
    <?php include 'accept_cookies.php'; ?>
</body>
 
</html>
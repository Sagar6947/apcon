<?php 
include('config.php');

 


?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Facnex - Industry & Factory HTML Template">
    <meta name="keywords" content="new, html, Facnex, design, Consulting, Business, Portfolio, Agency, advanced,">
    <link rel="shortcut icon" href="assets/images/favicon.ico" title="Favicon" sizes="16x16"/>
    <!-- Main Page Title -->
    <title>Gallery | Bhavya Resources - Totally eco-friendly mining Solutions</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/plugins.css"> 
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <link rel="stylesheet" href="assets/css/main.css"> 
    <link rel="stylesheet" href="assets/css/responsive.css">  
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
                <h1 class="page-title-heading">Our Gallery  </h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Gallery  </li>
                </ul>
                
               
            </div>
        
        </div>
    
    </div>
</section>
   
 <section id="portfolio" class="portfolio portfolio-page portfolio-two pt-120 pb-90  bg-style">
      <div class="container">
        <div class="row">
            <div class="col">
                <div class="filter-group">
                    <!-- Control List -->
                    <ul id="control" class="list-control">
                        <li class="active" data-filter="all">All</li>
                        <?php
                        
                        $tab_menu = '';
                        $tab_contennt = '';
                         
                        $er = "SELECT * FROM `gallery_cate`";
                        $pro = mysqli_query($con, $er);
                        while ($row = mysqli_fetch_array($pro)) {
 
                        ?>
                       
                       <li data-filter="<?= $row['cate_id'] ?>"><?= $row['name'] ?></li>
                        <?php } ?>
                   </ul>
                </div>

            </div>
        </div>
          
         <!-- End Row 1 Column -->
        <!-- Start Row 2 Column -->
        <div id="filtr-container" class="row">
            
            <!-- Column Image -->
            <?php
            
            $gallery = "SELECT * FROM `gallery`";

    $pros = mysqli_query($con, $gallery);
    while ($gal = mysqli_fetch_array($pros)) {
        ?>
            <div class="col-sm-6 col-lg-4 filtr-item" data-category="<?= $gal['category'] ?>" data-sort="value">
                <div class="case-item">
                    <div class="img-case">
                        <!-- Image OF Case -->
                        <div class="zoom-case">
                                        <a href="admin/images/<?= $gal['image'] ?>">
                        <img src="admin/images/<?= $gal['image'] ?>" alt="<?= $gal['title'] ?>" style="height:300px;">
</a>
                                        </div>
                        
                    </div>
                </div>
            </div>
            <?php } ?>
             

        </div>
          
          
      </div>
</section>
    

    <?php include 'footer.php'; ?>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- plugins Js  -->
    <script src="assets/js/plugins.js"></script>
    <!-- My Custom Js  -->
    <script src="assets/js/custom.js"></script> 
</body>
 
</html>
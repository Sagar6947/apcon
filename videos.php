<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Facnex - Industry & Factory HTML Template">
    <meta name="keywords" content="new, html, Facnex, design, Consulting, Business, Portfolio, Agency, advanced,">
    <link rel="shortcut icon" href="assets/images/favicon.ico" title="Favicon" sizes="16x16"/> 
    <title>Videos | Bhavya Resources - Totally eco-friendly mining Solutions</title> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/plugins.css"> 
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <link rel="stylesheet" href="assets/css/main.css"> 
    <link rel="stylesheet" href="assets/css/responsive.css"> 
 


</head>
<body>
    <?php include 'header.php'; ?> 
<section id="page" class="header-breadcrumb">

    
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-title-heading">Our Videos</h1>

               
            </div>
        
        </div>
    
    </div>
</section> 

 <div id="portfolio" class="portfolio portfolio-two pt-120 pb-90">
      <div class="container">
          
        <!-- End Row 1 Column -->
        <!-- Start Row 2 Column -->
        <div class="row">
            <?php

                    $er = "SELECT * FROM `videos` ORDER BY id DESC";
                    $pro = mysqli_query($con, $er);
                    while ($row = mysqli_fetch_array($pro)) {

                    ?>
            <!-- Column Image -->
            <div class="col-md-6 col-lg-4">
                <div class="case-item">
                    <div class="img-case">
                        <!-- Image OF Case -->
                        <iframe width="100%" height="250px" src="https://www.youtube.com/embed/<?= $row['link'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="image"></iframe>


                        <!--<div class="overlay-case">-->
                        <!--    <div class="inner-overlay">-->
                                <!-- Text OF Case -->
                        <!--        <div class="case-study-text"> -->
                        <!--            <div class="links-case">-->


                        <!--                <div class="zoom-case">-->
                        <!--                <a href="assets/images/portfolio/portfolio-2/1.jpg"><i class="fas fa-search-plus"></i></a>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div> -->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
             <?php
                    }
                    ?>

        </div>
      </div>
</div>
  <?php include 'footer.php'; ?>
 
    <script src="assets/js/jquery-3.3.1.min.js"></script> 
    <script src="assets/js/plugins.js"></script> 
    <script src="assets/js/custom.js"></script> 
</body>

 </html>
<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Environmental laws | Bhavya Resources - Totally eco-friendly mining Solutions">
    <meta name="keywords" content="Environmental laws | Bhavya Resources - Totally eco-friendly mining Solutions">
    <link rel="shortcut icon" href="assets/images/favicon.ico" title="Favicon" sizes="16x16"/>
    <!-- Main Page Title -->
    <title>Environmental laws | Bhavya Resources - Totally eco-friendly mining Solutions</title>
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

</head>
<body>
    <?php include'header.php'; ?>
     
<section id="page" class="header-breadcrumb">

    
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-title-heading">Environmental laws</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Environmental laws</li>
                </ul>
                
               
            </div>
        
        </div>
    
    </div>
</section>
   
<div id="service" class="single-services services-page pt-120 pb-40">
    
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="widget mb-30">
                    <div class="body-widget">
                        <div class="title-widget">
                            <h3>Environmental laws</h3>
                        </div>
                        
                        <ul class="lists-brochures">
                            
                            <?php
                                $i = 0;
                                $er = "SELECT * FROM `environment_laws` ORDER BY id DESC";
                                $pro = mysqli_query($con, $er);
                                while ($row = mysqli_fetch_array($pro)) {
                                    $i = $i + 1;
                                ?>
                                
                        <li>
                            <a href="admin/images/environment/<?= $row['file'] ?>" target="_blank">
                                <i class="fa fa-download"></i>
                               <?= $row['title'] ?>
                                <span>pdf</span>
                            </a>
                        </li>
                        
                         
                                <?php
                                }
                                ?>

              
                        
                        
                    </ul>
                        
                    </div>
                    
                </div>
             
            </div>
            
            
        </div>
    </div>
</div>     
   <?php include'footer.php'; ?>
    <script src="assets/js/jquery-3.3.1.min.js"></script> 
    <script src="assets/js/plugins.js"></script> 
    <script src="assets/js/custom.js"></script> 
</body> 
</html>
<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Joint Venture & Mining | Bhavya Resources - Totally eco-friendly mining Solution ">
    <meta name="keywords" content="Joint Venture & Mining | Bhavya Resources - Totally eco-friendly mining Solution ">
    <link rel="shortcut icon" href="assets/images/favicon.ico" title="Favicon" sizes="16x16"/>
    <title>Products | Bhavya Resources - unearthing your dream </title>
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
  

<style>
    p{
    text-align:justify;
    }
    
    @media only screen and (max-width: 1400px) {
   .portfolio-three-item .img-case img {
       
       height:500px;
   }
   
    @media only screen and (max-width: 676px) {
   .portfolio-three-item .img-case img {
       
       height:300px;
   }
   
   h1{
       font-size:43px;
   }
  
   
}
</style>
</head>
<body>
  <?php include 'header.php'; ?>
  

<section id="page" class="header-breadcrumb">

    
    <div class="container">
        <div class="row">
            <div class="col-lg-6"> 
                <h1 class="page-title-heading">Our Products
                </h1>
                
               
            </div>
        
        </div>
    
    </div>
</section>
   
<section class="portfolio portfolio-page-three ptb-120">

    
    <div class="container-fluid no-padding">
        <div class="owl-carousel case-three">
             <?php
                    $er = "SELECT * FROM `product`";
                    $pro = mysqli_query($con, $er);
                    while ($row = mysqli_fetch_array($pro)) {
                    ?>
             <div class="owl-item">
                <div class="portfolio-three-item">
                    <div class="img-case" style="height:550px;background-color:rgb(0,0,0,0.5)">
                         <!-- Image OF Team -->
                        <img src="admin/images/<?= $row['image'] ?>" alt="<?= $row['name'] ?>" style="height:550px;opacity: 0.5;">

                    </div>
                   
                    <div class="case-study-text" >
                        <div class="text-of-case"  style=" background:none">
                            <div class="tag-case" style="font-size:24px;" > <?= $row['name'] ?>  </div>
                            <p style="color:white" ><?= strip_tags($row['description']) ?> </p>
                            
                         
                            
                        </div>
                    </div>
                </div>      
            </div>
            
            <?php
            }
            ?>
       </div>
    </div>
</section>
    
    <section class="blog blog-grid pt-120 pb-90" style="background-image:url('https://www.bhavyaresources.in/assets/images/con-bg.jpg');">  
    <div class="container">
   
   <div class="row">
<?php
                    $er = "SELECT * FROM `product`";
                    $pro = mysqli_query($con, $er);
                    while ($row = mysqli_fetch_array($pro)) {
                    ?>
<!-- New Item -->
<div class="col-lg-3 col-sm-6">
    <div class="blog-item">
        <!-- Blog Image -->
        <div class="blog-img">
             <img src="admin/images/<?= $row['image'] ?>" alt="<?= $row['name'] ?>" style="height:200px;"> 
        </div>
        <!-- Blog info -->
        <div class="blog-info">

            


            <div class="title-post">

                 <h5><?= $row['name'] ?></h5> 
            </div>
 
        </div>

    </div>
</div>


  <?php
            }
            ?>
      
       

     

</div>


        
    </div>
    

    
</section>
  
<?php include'footer.php'; ?>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- plugins Js  -->
    <script src="assets/js/plugins.js"></script>
    <!-- My Custom Js  -->
    <script src="assets/js/custom.js"></script> 
</body>
</html>

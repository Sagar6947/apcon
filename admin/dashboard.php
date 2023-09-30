<?php include('config.php');
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Bhavya Resources - Dashboard</title>
	<link rel="stylesheet" href="css/vendors_css.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary">
	
<div class="wrapper">

 <?php include'header.php'; ?>
 <?php include'menu.php'; ?>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
						
						<div class="box-body pt-0">
							<div class="d-flex align-items-center justify-content-between">
								<div class="icon bg-primary-light rounded-circle">
									<i class="text-primary mr-0 font-size-20 fa fa-heartbeat"></i>
								</div>
								<div>
								    <?php 
								     $er = "SELECT * FROM gallery";
                                     $pro = mysqli_query($con, $er);
                                     $ro = mysqli_fetch_array($pro);
                                     $count = mysqli_num_rows($pro);
								    ?>
									<h3 class="text-dark mb-0 font-weight-500"><?= $count; ?></h3>
									<p class="text-mute mb-0">Gallery images</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
					
						<div class="box-body pt-0">
							<div class="d-flex align-items-center justify-content-between">
								<div class="icon bg-info-light rounded-circle">
									<i class="text-info mr-0 font-size-20 fa fa-user-md"></i>
								</div>
								<div>
								      <?php
    $i = 0;
    $er = "SELECT * FROM testimonial  ";
     $product = mysqli_query($con, $er);
    $row = mysqli_fetch_array($product);
    $coun = mysqli_num_rows($product);
    ?>
									<h3 class="text-dark mb-0 font-weight-500"><?= $coun; ?></h3>
									<p class="text-mute mb-0">Total Testimonial</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
					
						<div class="box-body pt-0">
							<div class="d-flex align-items-center justify-content-between">
								<div class="icon bg-warning-light rounded-circle">
									<i class="text-warning mr-0 font-size-20 fa fa-money"></i>
								</div>
								<div>
<?php
    $i = 0;
    $er = "SELECT * FROM contact_query  ";
     $produc = mysqli_query($con, $er);
   
    $couwn = mysqli_num_rows($produc);
    ?>
								    
								    
									<h3 class="text-dark mb-0 font-weight-500"><?= $couwn ?></h3>
									<p class="text-mute mb-0">Contact Query</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				
				
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
	  &copy; <?= date("Y") ?> <a href="">Bhavya Resources</a>. All Rights Reserved.
  </footer>

 

  <div class="control-sidebar-bg"></div>
  
</div>

	<script src="js/vendors.min.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>	
    

	<script src="assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="assets/vendor_components/progressbar.js-master/dist/progressbar.js"></script>
	<script src="js/template.js"></script>
	<script src="js/pages/dashboard.js"></script>
	<script src="js/demo.js"></script>
	
	
</body>

</html>

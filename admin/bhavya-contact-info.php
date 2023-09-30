<?php include('config.php');
include('session.php');
 
  $sql=mysqli_query($con,"select * from `contact_info` ");
        $row=mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/florence-admin-template/images/favicon.ico">

    <title>Beyou Contact Info | Bhavya Resources </title>
  
	<!-- Vendors Style-->
	<?php include('header-link.php'); ?>	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 
    
</head>

<?php

if(isset($_POST['submit'])) 
	{
 $phone =  $_POST['phone'];
 $mobile =  $_POST['mobile']; 
 $address =  $_POST['address'];	
  $email =  $_POST['email'];
 $sal=   mysqli_query($con, "UPDATE `contact_info` SET `phone`='$phone',`mobile`='$mobile',`address`='$address',`email`='$email' WHERE id='1' ");
		 
		 if($sal)
	{
      echo '<script>window.location="beyou-contact-info.php"</script>';
	}
		
		
}				
	
 ?>
<body class="hold-transition light-skin sidebar-mini theme-primary">
	
<div class="wrapper">

 <?php include'header.php'; ?>
 <?php include'menu.php'; ?>
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
			<div class="row">
<div class="col-lg-2 col-2"></div>
				<div class="col-lg-8 col-8">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Beyou Contact Info</h4>
						</div>
						
						<form class="form" method="post">
							<div class="box-body">
								<h4 class="box-title text-info"><i class="ti-user mr-15"></i>Update Contact Info</h4>
								<hr class="my-15">
								<div class="fieldGroup row" >
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Beyou Phone No.</label>
									  <input type="text" 
									  class="form-control" name="phone"   placeholder="phone No." value="<?= $row['phone']; ?>">
									</div>
								  </div>

								   <div class="col-md-6">
									<div class="form-group">
									  <label>Beyou Mobile No.</label>
									  <input type="text" 
									  class="form-control" name="mobile"   placeholder="Mobile No." value="<?= $row['mobile']; ?>">
									</div>
								  </div>

								
								   <div class="col-md-12">
									<div class="form-group">
									  <label>Beyou Email</label>
									  <input type="text" 
									  class="form-control" name="email"   placeholder="Email Address" value="<?= $row['email']; ?>">
									</div>
								  </div>


								   <div class="col-md-12">
									<div class="form-group">
									  <label>Beyou Address</label>
									  <input type="text" 
									  class="form-control" name="address"   placeholder="Address" value="<?= $row['address']; ?>">
									</div>
								  </div>

								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-rounded btn-primary btn-outline" 
								name="submit">
								  <i class="ti-save-alt"></i> Update
								</button>
							</div>  
						</form>
					
				 </div>
				 <div class="col-lg-2 col-2"></div>
				</div>
			 </section>
     

		</div>
	</div>


<?php include('footer-link.php'); ?>
</body>
</html>

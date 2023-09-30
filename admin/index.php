<?php
include("config.php");
 $msg = '';
 if (isset($_POST["submit"]))
{
    
    $name = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
	$fg =  "SELECT * FROM `login` WHERE `username`='".$name."' ";
	$result = mysqli_query($con,$fg);
	if($row = mysqli_fetch_array($result))
	{
	    if ($row['pass'] == $password) 
    	{
    		
    	$_SESSION['Bhavya_TGA'] = $row['id'];
    	echo'<script>window.location="dashboard.php"</script>';
    	} 
    	else 
    	{
    			$msg =  "<h4 style='color:red;'>Incorrect Username  or Password ! ! ! </h4>";
    	}	
	}
	else
	{
	    $msg =  "<h4 style='color:red;'>no user with register name ! ! ! </h4>";
	   
	}
																 
}	
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

    <title>Bhavya Resources</title>
  
	<!-- Vendors Style-->
	<?php include('header-link.php'); ?>	

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url(images/auth-bg/bg-1.jpg)" data-overlay="5">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Let's Get Started</h2>
								<p class="mb-0">Sign in to continue to Bhavya Resources.</p>							<p><?= $msg ?> </p>
							</div>
							<div class="p-40">
								<form method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input type="text" class="form-control pl-15 bg-transparent" name="username" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" name="password" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										
										
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-danger mt-10" name="submit" 
										  >SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
									
							</div>						
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>


	
	<script src="js/vendors.min.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>	

</body>
</html>

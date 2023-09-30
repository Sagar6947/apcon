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
    <link rel="icon" href="https://www.multipurposethemes.com/admin/florence-admin-template/images/favicon.ico">

    <title>Testimonial | Bhavya Resources </title>
  	<?php include('header-link.php'); ?>	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

</head>

<?php

if(isset($_POST['submit'])) 
	{
 $name =  $_POST['name'];
  $msg =  $_POST['msg'];
	
	$file=$_FILES['image']['name'];
    $tmpfile=$_FILES['image']['tmp_name'];
    $folder=date("dmyhis").$file;
    move_uploaded_file($tmpfile,'images/'.$folder);
		
	$sal=mysqli_query($con, "INSERT INTO `testimonial`( `name`, `msg`, `image`) VALUES ('$name','$msg','$folder')");

			if($sal)
			{
echo '<script>window.location="testimonial_view.php"</script>';
		
}

else
{
	echo '<script>swal("Something went Wrong!", "You clicked the button!", "danger")</script>';
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
						  <h4 class="box-title">Testimonial</h4>
						</div>
						
						<form class="form" method="post" enctype="multipart/form-data">
							<div class="box-body">
								<h4 class="box-title text-info"><i class="ti-user mr-15"></i>Upload Testimonial</h4>
								<hr class="my-15">
									<div class="row" >
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
								<input type="text" name="name" class="form-control">

								</div>
							</div>
								<div class="col-md-6">
								<div class="form-group">
									<label>Image</label>
								<input type="file" name="image" class="form-control">

								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Comment</label>
									<textarea id="editor1"  rows="10" cols="80" name="msg" required="">

									</textarea>

								</div>
							</div>
						</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-rounded btn-primary btn-outline" 
								name="submit">
								  <i class="ti-save-alt"></i> Upload
								</button>
							</div>  
						</form>
					
				 </div>
				 <div class="col-lg-2 col-2"></div>
				</div>
			 </section>
      
		</div>
	</div>
<script>
CKEDITOR.replace( 'editor1' );

</script>


<?php include('footer-link.php'); ?>

</body>
</html>

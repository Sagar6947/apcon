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

    <title>Chief Survey Service update | Bhavya Resources </title>
  	<?php include('header-link.php'); ?>	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

</head>

<?php

$er = "SELECT * FROM `chief_survey_service` WHERE id = '".$_GET['id']."'" ;
    $pro = mysqli_query($con, $er);
    $row = mysqli_fetch_array($pro);

if(isset($_POST['submit'])) 
	{
 $name =  $_POST['name'];
  $msg =  $_POST['msg'];
   
  
  if(!empty($_FILES['image']['name'])){
       $image =  $_FILES['image']['name'];
   move_uploaded_file($_FILES['image']['tmp_name'],'survey/'.$image);
  }else{
       $image =  $_POST['image_nm'];
  }
  $sal=mysqli_query($con, "UPDATE `chief_survey_service` SET `name`='$name',`description`='$msg',`image`='$image' WHERE id = '".$_GET['id']."' ");

			if($sal)
			{
echo '<script>window.location="chief_survey_service.php"</script>';
		
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
						  <h4 class="box-title">Chief Survey Service
						  Update</h4>
						</div>
						
						<form class="form" method="post" enctype="multipart/form-data">
							<div class="box-body">
								
								<div class="row" >
							  <div class="col-md-12">
								<div class="form-group">
									<label>Name</label>
								<input type="text" name="name" class="form-control" value="<?= $row['name'] ?>">

								</div>
							 </div>
								 <div class="col-md-12">
								<div class="form-group">
									<label>Image</label>
								<input type="file" name="image" class="form-control">
								<input type="hidden" name="image_nm" class="form-control" value="<?= $row['image'] ?>">

								</div>
							 </div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Description</label>
									<textarea id="editor1"  rows="10" cols="80" name="msg" >
                                    <?= $row['description'] ?>
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
CKEDITOR.replace('editor1');
</script>


<?php include('footer-link.php'); ?>

</body>
</html>

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

    <title>Gallery Category | Bhavya Resources </title>
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

	$sal=mysqli_query($con, "INSERT INTO `gallery_cate`( `name`) VALUES ('$name')");

			if($sal)
			{
echo '<script>window.location="gallery-category.php"</script>';
		
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
						  <h4 class="box-title">Gallery Category </h4>
						</div>
						
						<form class="form" method="post" enctype="multipart/form-data">
							<div class="box-body">
								<h4 class="box-title text-info"><i class="ti-user mr-15"></i>Upload Gallery Category</h4>
								<hr class="my-15">
									<div class="row" >
							<div class="col-md-12">
								<div class="form-group">
									<label>Category</label>
								<input type="text" name="name" class="form-control">

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
      

 <section class="content">
		  <div class="row">
			  <div class="col-lg-2 col-2"></div>
			<div class="col-lg-8 col-8">
				<div class="box">
					<div class="box-header">						
						<h4 class="box-title">View  Gallery Category </h4>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
								<thead>

									<tr>
										<th>Sno</th>
										<th>Name</th>
									
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								   <?php
    $i = 0;
    $er = "SELECT * FROM `gallery_cate`  ORDER BY `cate_id` DESC";
    $pro = mysqli_query($con, $er);
    while ($row = mysqli_fetch_array($pro)) {
   $i = $i + 1;
    ?>

									<tr>
										<td><?= $i; ?></td>
										<td><?= $row['name'] ?></td>
									<td>
										<a href="category-del.php?id=<?= $row['cate_id'] ?>" 
										
											class="btn btn-danger">Delete</a></td>
									</tr>
								<?php
								     }
								 ?>
								 </tbody>
								<tfoot>
									<tr>
										<th>Sno</th>
										<th>Name</th>
									
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
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

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

    <title>Chief Survey Service | Bhavya Resources </title>
  	<?php include('header-link.php'); ?>	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

</head>

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


      <section class="content">
		  <div class="row">
			  
			<div class="col-12">
				<div class="box">
					<div class="box-header">						
						<h4 class="box-title">View  Chief Survey Service </h4>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
								<thead>

									<tr>
										<th>Sno</th>
										<th>Name</th>
										<th>Description</th>
										<th>Image</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								   <?php
    $i = 0;
    $er = "SELECT * FROM `chief_survey_service` ORDER BY id DESC";
    $pro = mysqli_query($con, $er);
    while ($row = mysqli_fetch_array($pro)) 
    {
   $i = $i + 1;
    ?>

									<tr>
										<td><?= $i; ?></td>
										<td><?= $row['name'] ?></td>
									
										<td><?= substr($row['description'],0,60) ?>
											
										</td>
										<td><img src="survey/<?= $row['image'] ?>" style="height:50px;" /></td>

										<td><a href="chief_survey_service_update.php?id=<?= $row['id'] ?>" 
											class="btn btn-info">Update</a>
										
										<a href="chief_survey_service_update_del.php?id=<?= $row['id'] ?>" 
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
										<th>Description</th>
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



<?php include('footer-link.php'); ?>

</body>
</html>

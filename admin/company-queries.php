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

    <title>Company Query | Bhavya Resources </title>
  
	<!-- Vendors Style-->
	<?php include('header-link.php'); ?>	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  
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

		<!-- Main content -->
		
<section class="content">
		  <div class="row">
			  
			<div class="col-12">
				<div class="box">
					<div class="box-header">
					<div class="row">		
					<div class="col-sm-9">				
						<h4 class="box-title">View Company Queries </h4>
					</div>
					
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
								<thead>
									<tr>
										<th>Sno</th>
										<th>Name</th>
										<th>Number</th>
										<th>Company</th>
										<th>Location</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								   <?php
    $i = 0;
    $er = "SELECT * FROM query";
     $pro = mysqli_query($con, $er);
    while ($ro = mysqli_fetch_array($pro)) {
   $i = $i + 1;
    ?>

									<tr>
										<td><?= $i; ?></td>
										
										<td><?= $ro['name'] ?></td>
                                    
										<td><?= $ro['number'] ?></td>
										<td><?= $ro['company'] ?></td>
                                    
										<td><?= $ro['location'] ?></td>
										<td>
										
										<a href="query-del.php?id=<?= $ro['id'] ?>" 
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
										<th>Number</th>
										<th>Company</th>
										<th>Location</th>
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

<script src="js/datatable/datatables.min.js"></script>
<script src="js/pages/data-table.js"></script>

</body>
</html>

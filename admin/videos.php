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

    <title>Video | Bhavya Resources </title>
  	<?php include('header-link.php'); ?>	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

</head>

<?php

if(isset($_POST['submit'])) 
	{
 $title =  $_POST['title'];
 $video_path =  $_POST['link'];

$video_path = preg_replace("#.*youtube\.com/watch\?v=#", "" , $video_path);
              $video_path = preg_replace("#.*https://youtu.be/#", "" , $video_path);	

		
	$sal=mysqli_query($con, "INSERT INTO `videos`( `title`, `link`) VALUES ('$title','$video_path')");

			if($sal)
			{
echo '<script>window.location="videos.php"</script>';
		
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
						  <h4 class="box-title">Video </h4>
						</div>
						
						<form class="form" method="post" enctype="multipart/form-data">
							<div class="box-body">
								<h4 class="box-title text-info"><i class="ti-user mr-15"></i>Upload Video</h4>
								<hr class="my-15">
									<div class="row" >
							<div class="col-md-12">
								<div class="form-group">
									<label>title</label>
								<input type="text" name="title" class="form-control">

								</div>
							</div>
								<div class="col-md-12">
								<div class="form-group">
									<label>Video link</label>
								<input type="text" name="link" class="form-control">

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
						<h4 class="box-title">View  Video </h4>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
								<thead>

									<tr>
										<th>Sno</th>
										<th>Title</th>
										<th>Video</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								   <?php
    $i = 0;
    $er = "SELECT * FROM `videos` ORDER BY id DESC";
    $pro = mysqli_query($con, $er);
    while ($row = mysqli_fetch_array($pro)) {
   $i = $i + 1;
    ?>

									<tr>
										<td><?= $i; ?></td>
										<td><?= $row['title'] ?></td>
										<td><iframe width="100" height="100" src="https://www.youtube.com/embed/<?= $row['link'] ?>">
                                    </iframe></td>
										
										<td>
										<a href="video_del.php?id=<?= $row['id'] ?>" 
											class="btn btn-danger">Delete</a></td>
									</tr>
								<?php
								     }
								 ?>
								 </tbody>
								<tfoot>
									<tr>
										<th>Sno</th>
										<th>Title</th>
										<th>Video</th>
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

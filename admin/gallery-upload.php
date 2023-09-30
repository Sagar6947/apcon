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

    <title>Gallery Upload | Bhavya Resources  </title>
  
	<!-- Vendors Style-->
	<?php include('header-link.php'); ?>	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="application/javascript">
		$(document).ready(function(){
			//group add limit
			var maxGroup = 200;
			
			//add more fields group
			$(".addMore").click(function(){
				if($('body').find('.fieldGroup').length < maxGroup){
					var fieldHTML = '<div class="fieldGroup row">'+$(".fieldGroupCopy").html()+'</div>';
					$('body').find('.fieldGroup:last').after(fieldHTML);
				}else{
					alert('Maximum '+maxGroup+' groups are allowed.');
				}
			});
			
			//remove fields group
			$("body").on("click",".remove",function(){ 
				$(this).parents(".fieldGroup").remove();
			});
		});
		</script>
    
</head>

<?php

if(isset($_POST['upload'])) 
	{


		$cate_name =  $_POST['cate_name'];

   $c =  $_POST['title'];
if(!empty($c))
	{
		for($i = 0; $i < count($c); $i++)
		{	
			if(!empty($c[$i]))
			{
                
   
              
	$file=$_FILES['image']['name'][$i];
    $tmpfile=$_FILES['image']['tmp_name'][$i];
    $folder=$file;
    move_uploaded_file($tmpfile, 'images/'.$folder);

   

	$sal=mysqli_query($con, "INSERT INTO `gallery`( `category`, `title`, `image`)  VALUES ('".$cate_name."' , '".$c[$i]."' , '".$folder."')");

			}
		}
	}
	echo '<script>window.location="gallery-view.php"</script>';
		
}

else
{
	echo '<script>swal("Good job!", "You clicked the button!", "success")</script>';
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
						  <h4 class="box-title">Gallery</h4>
						</div>
						
						<form class="form" method="post" enctype="multipart/form-data">
							<div class="box-body">
								<h4 class="box-title text-info"><i class="ti-user mr-15"></i>Upload Gallery</h4>
								<hr class="my-15">
								<div class="fieldGroup row" >
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Category Name</label>
									  
									  
									  <select class="form-control" name="cate_name">
									       <option value="">Select Category</option>
									       <?php
  
    $er = "SELECT * FROM `gallery_cate`";
    $pro = mysqli_query($con, $er);
    while ($row = mysqli_fetch_array($pro)) {
    ?>
									      <option value="<?= $row['cate_id'] ?>"><?= $row['name'] ?></option>
									      
									      <?php
    } ?>
									  </select>
									  
									  
									 
									</div>
								  </div>

								  <div class="col-md-6">
									<div class="form-group">
									  <label>Title</label>
									  <input type="text" class="form-control" name="title[]"   placeholder="Title" >
									</div>
								  </div>



								  <div class="col-md-11">
									<div class="form-group">
									  <label>Gallery Image</label>
									  <input type="file" class="form-control" name="image[]"   placeholder="Gallery Image" >
									</div>
								  </div>
								  <div class="col-md-1">
								  	<label> ADD</label>
								  	<a href="javascript:void(0)" class="form-control btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"> </span>  </a>
								  </div>
								</div>
								

								<div class="fieldGroupCopy row" 
								style="display: none;">
								 <div class="col-md-6">
									<div class="form-group">
									  <label>Title</label>
									  <input type="text" class="form-control" name="title[]"   placeholder="Title">
									</div>
								  </div>



								 <div class="col-md-5">
									<div class="form-group">
									  <label>Gallery Image</label>
									  <input type="file" class="form-control" name="image[]"   placeholder="Gallery Image">
									</div>
								  </div>
								  <div class="col-md-1">
								  </br>
								  	<a href="javascript:void(0)" class="form-control btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"> </span>  </a>
								  </div>
								</div>
								
								
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-rounded btn-primary btn-outline" 
								name="upload">
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

<!-- <script type="text/javascript">
$('#showdata').on('click' , '.item-delete' ,function(){
var id = $(this).attr('data');
alert(id);
exit;

});

</script> -->


<?php include('footer-link.php'); ?>

</body>
</html>

<?php

include('config.php');

if(isset($_GET['id']))
{

	$i=$_GET['id'];




	$q=mysqli_query($con,"DELETE FROM `gallery_cate` WHERE `cate_id` ='$i'");
	if($q)
	{
		
	   echo '<script>window.location="gallery-category.php"</script>';
		
}
}

?>
<?php

include('config.php');

if(isset($_GET['id']))
{

	$i=$_GET['id'];

	$qx=mysqli_query($con,"select * from `gallery` WHERE id ='$i'");
	$fd = mysqli_fetch_array($qx);
	unlink('images/'.$fd['image']);


	$q=mysqli_query($con,"DELETE FROM `gallery` WHERE id ='$i'");
	if($q)
	{
		
	   echo '<script>window.location="gallery-view.php"</script>';
		
}
}

?>
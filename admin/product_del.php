<?php

include('config.php');

if(isset($_GET['id']))
{
	$i=$_GET['id'];

	$qx=mysqli_query($con,"select * from `product` WHERE id='$i'");
	$fd = mysqli_fetch_array($qx);
	unlink('images/'.$fd['image']);  



	$q=mysqli_query($con,"DELETE FROM `product` WHERE id='$i'");
	if($q)
	{
	   echo '<script>window.location="product-view.php"</script>';
		
}
}

?>
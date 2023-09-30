<?php

include('config.php');

if(isset($_GET['id']))
{

	$i=$_GET['id'];

	$qx=mysqli_query($con,"select * from `environment_laws` WHERE id ='$i'");
	$fd = mysqli_fetch_array($qx);
	unlink('images/environment/'.$fd['file']);


	$q=mysqli_query($con,"DELETE FROM `environment_laws` WHERE id ='$i'");
	if($q)
	{
		
	   echo '<script>window.location="environment_laws.php"</script>';
		
}
}

?>
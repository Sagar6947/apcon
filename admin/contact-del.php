<?php

include('config.php');

if(isset($_GET['id']))
{
	$i=$_GET['id']; 



	$q=mysqli_query($con,"DELETE FROM `contact_query` WHERE id='$i'");
	if($q)
	{
	   echo '<script>window.location="contact-query.php"</script>';
		
}
}

?>
<?php

include('config.php');

if(isset($_GET['id']))
{

	$i=$_GET['id'];
    $q=mysqli_query($con,"DELETE FROM `chief_survey_service` WHERE `id` ='$i'");
	if($q)
	{
		
	   echo '<script>window.location="chief_survey_service.php"</script>';
		
}
}

?>
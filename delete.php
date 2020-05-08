<?php 
include "config.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql="delete from users where id='$id'";
	$fire=mysqli_query($con,$sql);
	if($fire)
	{
		echo "<script>alert('Record Deleted successfully ');window.location.href='index.php';</script>";
	}
	else
	{
		echo "<script>alert('Something went wrong');window.location.href='index.php';</script>";

	}

}
?>
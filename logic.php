<?php
include 'config.php';//connection file
if(isset($_POST['insert']))
{
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$sql="insert into users (name,mobile,email,address) values('$name','$mobile','$email','$address')";
	$fire=mysqli_query($con,$sql);
	if($fire)
	{
		echo "<script>alert('Record Inserted successfully');window.location.href='index.php';</script>";
	}
	else
	{
		echo "<script>alert('Something went wrong');window.location.href='index.php';</script>";
	}
}
if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$sql="update users set name='$name',mobile='$mobile',email='$email',address='$address'";
	$fire=mysqli_query($con,$sql);
	if($fire)
	{
		echo "<script>alert('Record Updated successfully');window.location.href='index.php';</script>";
	}
	else
	{
		echo "<script>alert('Something went wrong');window.location.href='index.php';</script>";
	}
}
?>










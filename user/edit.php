<?php
include "init.php";
session_start();

$email = $_SESSION["nm"];
  
		
       echo  $_SESSION["nm"];
	   
	   
	  // $email = $_SESSION["nm"];
  
		
       //echo  "$email";
	

if(isset($_POST['btn2']))
{
	$imagename=$_FILES["myimage"]["name"]; 
	$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));	

	if($imagetmp)
	{
		echo "ok";
		$sql1="update useri set DP = '$imagetmp' where email like '$email'";
		 mysqli_query($con, $sql1);
	}
	
	
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email2 = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$hash = password_hash($password,PASSWORD_DEFAULT);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	
	$sql2= "update useri set  name = '$name', address= '$address', password='$hash' where email like '$email'";
	if(mysqli_query($con, $sql2))
	{
		$_SESSION["nm"]= $email;
		header("Location: pro.php");
	}
	else
	{ 
		echo "shomossha";
	
	}
}

 
?>
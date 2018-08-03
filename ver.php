<?php
include "init.php";
session_start();

$email = $_SESSION["nm"];
  
		
       //echo  $_SESSION["nm"];
	   
	   
	  // $email = $_SESSION["nm"];
  
		
       echo  "$email";
	
$kl=1;
 echo  "$kl";
	$sql2= "update useri set  chk = '$kl' where email like '$email'";
	if(mysqli_query($con, $sql2))
	{
		$_SESSION["nm"]= $email;
		header("Location: log.php");
		echo  "$email";
	}
	else
	{ 
		echo "shomossha";
	
	}


 
?>
<?php

include "init.php";

session_start();

$patient=$_GET["name"];
$page=$_GET["age"];
$gender=$_GET["gender"];
$dname=$_GET["dname"];

$email = $_SESSION["nm"];
//echo "$email";

		$sql_query = mysqli_query($con,"update prescription set patient='$patient' where doctor_id like '$email';");  
		$sql_query = mysqli_query($con,"update prescription set page='$page' where doctor_id like '$email';"); 
		$sql_query = mysqli_query($con,"update prescription set pgender='$gender' where doctor_id like '$email';"); 
		$sql_query = mysqli_query($con,"update prescription set dname='$dname' where doctor_id like '$email';");  

		$_SESSION["nm"]=$email;
		  include "invoice.php";
		
		/*else
		{
			//echo "<h3>NOOOOOOOO...</h3>"; 
			//include "failure.html";
	
		}*/


?>
<?php

include "dbConnecta.php";

session_start();
$em=$_SESSION["nm"];

//echo "$em";


$name=$_GET["name"];
$company=$_GET["company"];
$date=$_GET["date"];
$quantity=$_GET["quantity"];
$address=$_GET["address"];


//echo "$name";







		$sql_query = "insert into medicine (name,company,quantity,date,address,user_id) values('$name','$company','$quantity','$date','$address','$em');";    
		
		
		if(mysqli_query($con,$sql_query))
		{
	
		  $message = "Donation Completed Successfully !!!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		include "appointment.html";
		}
		else
		{
			$message = "OOps..Donation Failed. try Again";
			echo "<script type='text/javascript'>alert('$message');</script>";
			include "appointment.html";
	
		}


 





?>	
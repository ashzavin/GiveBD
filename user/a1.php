<?php

include "init.php";





$name=$_GET["name"];
$company=$_GET["company"];
$date=$_GET["date"];
$quantity=$_GET["quantity"];











		$sql_query = "insert into medicine (name,company,quantity,date) values('$name','$company','$quantity','$date');";  
		
		
		if(mysqli_query($con,$sql_query))
		{
	
		  include "success.html";
		}
		else
		{
			//echo "<h3>NOOOOOOOO...</h3>"; 
			include "failure.html";
	
		}


 





?>
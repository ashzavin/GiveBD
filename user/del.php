<?php

include "init.php";



$id=$_GET["id"];
		
$sql_query = "delete from precribed where pri like '$id';";  
if(mysqli_query($con,$sql_query))
{
	
	  
	 //echo"<h3>Data deleted successfully...</h3>";
	 
	 include "pre.php";
	 
	 
	 }
else
{
	
	echo"<h3>Data insertion failed...</h3>";
}

?>
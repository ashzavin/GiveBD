<?php
          
			include "init.php";
      
	  
			$sql_query = "select medname,quantity,doctor_id from precribed;";
			$result = mysqli_query($con,$sql_query);
			
			
			$name=array();
			$q=array();
			$doctor_id = array();
			
			$i=0;
			while( $row = mysqli_fetch_array($result)) 
				 
			 {  
			 
             $name[]=$row["medname"];	
			 $q[]=$row["quantity"];
			 $doctor_id=$row["doctor_id"];
             $i=$i+1;
			  
			 }
			 
			 if($i>0){
				 $n=$i-1;
			 
			 
			 
			if($n==0){
			 
				$sql_query = "insert into prescription (med1,q1) values('$name[0]','$q[0]');";  
				
				
				if(mysqli_query($con,$sql_query))
				{
				
					  include "doctors.php";
				}
				else
				{
					//echo "<h3>NOOOOOOOO...</h3>"; 
					include "doctorf.php";
				
				}
			 }
			
			if($n==1){
			 
				$sql_query = "insert into prescription (med1,med2,q1,q2) values('$name[0]','$name[1]','$q[0]','$q[1]');";  
				
				
				if(mysqli_query($con,$sql_query))
				{
				
					  include "doctors.php";
				}
				else
				{
					//echo "<h3>NOOOOOOOO...</h3>"; 
					include "doctorf.php";
				
				}
			 }
			
			
			if($n==2){
			 
				$sql_query = "insert into prescription (med1,med2,med3,q1,q2,q3) values('$name[0]','$name[1]','$name[2]','$q[0]','$q[1]','$q[2]');";  
				
				
				if(mysqli_query($con,$sql_query))
				{
				
					  include "doctors.php";
				}
				else
				{
					//echo "<h3>NOOOOOOOO...</h3>"; 
					include "doctorf.php";
				
				}
			 }
			

			
			if($n==3){
			 
				$sql_query = "insert into prescription (med1,med2,med3,med4,q1,q2,q3,q4) values('$name[0]','$name[1]','$name[2]','$name[3]','$q[0]','$q[1]','$q[2]','$q[3]');";  
				
				
				if(mysqli_query($con,$sql_query))
				{
				
					  include "doctors.php";
				}
				else
				{
					//echo "<h3>NOOOOOOOO...</h3>"; 
					include "doctorf.php";
				
				}
			 }
			 
			 
			 
			 if($n==4){
			 
				$sql_query = "insert into prescription (med1,med2,med3,med4,med5,q1,q2,q3,q4,q5) values('$name[0]','$name[1]','$name[2]','$name[3]','$name[4]','$q[0]','$q[1]','$q[2]','$q[3]','$q[4]');";  
				
				
				if(mysqli_query($con,$sql_query))
				{
				
					  include "doctors.php";
				}
				else
				{
					//echo "<h3>NOOOOOOOO...</h3>"; 
					include "doctorf.php";
				
				}
			 }
			
			 }
			
			$sql_query = "Truncate table precribed;";
				
				if (mysqli_query($con, $sql_query)) {
					//echo "Record deleted successfully";
				} else {
					echo "Error deleting record: " . mysqli_error($conn);
				}
			
			
			if($i==0)
			{
				include "doctorf.php";
			}
			?>
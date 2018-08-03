<?php
          
			include "init.php";
      
	  
			$sql_query = "select med1,med2,med3,med4,med5,q1,q2,q3,q4,q5,doctor_id from prescription where doctor_id like 'asha1';";
			$result = mysqli_query($con,$sql_query);
			
			
			$med1=array();
			$med2=array();
			$med3=array();
			$med4=array();
			$med5=array();
			$q1=array();
			$q2=array();
			$q3=array();
			$q4=array();
			$q5=array();
			$doctor_id = array();
			
			$i=0;
			while( $row = mysqli_fetch_array($result)) 
				 
			 {  
			 
             $med1[]=$row["med1"];	
			 $med2[]=$row["med2"];
			 $med3[]=$row["med3"];
			 $med4[]=$row["med4"];
			 $med5[]=$row["med5"];
			 $q1[]=$row["q1"];
			 $q2[]=$row["q2"];
			 $q3[]=$row["q3"];
			 $q4[]=$row["q4"];
			 $q5[]=$row["q5"];
			 $doctor_id=$row["doctor_id"];
             $i=$i+1;
			  
			 }
			 $n=$i;
			 
			 
			 
			?>
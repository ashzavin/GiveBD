<?php
session_start();
 include "init.php";
  $email= $_SESSION['nm'];
  // do some validation here to ensure id is safe
  $sql = "SELECT * FROM useri WHERE email like '$email'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  mysqli_close($con);
  header("Content-type: image/jpeg");
	/*if (is_null($row['DP'])
	{
		 "im.png";
	}*/
	
	echo $row['DP'];
?>
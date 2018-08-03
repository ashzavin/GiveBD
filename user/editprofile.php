<?php
include "init.php";
//session_start();

//$email = $_SESSION["nm"];
  
		
       //echo  $_SESSION["nm"];
	  // $email = $_SESSION["nm"];
  include "test.php";
		
       //echo  "$email";
	

/*if(isset($_POST['btn2']))
{
	$imagename=$_FILES["myimage"]["name"]; 
	$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));	

	if($imagetmp)
	{
		echo "ok";
		$sql1="update useri set DP = '$imagetmp' where email like '$email'";
		 mysqli_query($con, $sql1);
	}
	$sql = "SELECT * FROM useri where email like '$email'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	
	$address = mysqli_real_escape_string($con, $_POST['address']);
	
	$sql2= "update useri set email = '$email', name = '$name', address= '$address' where email like '$id'";
	if(mysqli_query($con, $sql2))
	{
		//$_SESSION['user']= $email;
		//header("Location: editprofile.php");
	}
	else
	{ 
		echo "shomossha";
	
	}
}
*/
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Around Bangladesh</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hangout  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="style3.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->

<!--extra-->
<!--// css -->
<link rel="stylesheet" href="css/ken-burns.css">
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />


<!-- font -->
<link href="//fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
	<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript" src="script2.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
			<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 60000 * 10);
</script>
			
	<!-- //start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<!-- //swipe box js -->

<!-- sidev js -->

</head>

<?php
//session_start();
//session_start();
//$em=$email;

?>

<body style="background-color:white" data-spy= "scroll" data-target = "#uffjhamela">

	
	 
	 
	 <br><Br><Br>
	 
	 
	<div class="container">
	<div class = "row">
	
		<div class="col-md-3" id = "uffjhamela">
			<div class="profile-sidebar" data-spy = "affix">
				<!-- SIDEBAR USERPIC --><br>
				
				<div class="profile-userpic">
					<img src="getimage.php" class="img-responsive" alt="">
				</div>
				
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<h3><center><?php  ?></h3>
					</div>
					<div class="profile-usertitle-job">
						<?php  ?></center>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<br>
				<!--<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				 END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						
						<li class="active">
							<a href="editprofile.php">
							<i class="glyphicon glyphicon-pencil"></i>
							Edit Profile </a>
						</li>
						
						
						<li>
							<a href="pro.php">
							<i class="glyphicon glyphicon-user"></i>
							User account</a>
						</li>
						
						<li class="active">
							<a href="logout.php">
							<i class="glyphicon glyphicon-log-out"></i>
							Logout </a>
						</li>
					</ul>
				</div>
				
				<div class="clearfix"></div>
				<!-- END MENU -->
			</div>
			</div>
		
		
	<!--profile header-->
	
		<div class="col-md-9" style="background-color: white" >
				<br><br>
					<h1><center>Edit Your Profile</center></h1>
					<wow>
					<form action = "edit.php" method = "post" enctype="multipart/form-data">
					<div class="row" >
						<div class="col-md-11 baner-top ban-mar">
							<label>Upload New Profile Picture: </label>
							<input type="file" name="myimage">
						</div>
						<div class="col-md-11 baner-top ban-mar">
							<label>Name: </label></br>
							<input class="form-control" name="name" type="text" value = "<?php echo $row["name"];?>" placeholder = "Enter your full name..." required>
						</div></br></br>
						<div class="col-md-11 baner-top ban-mar">
							<label>Address: </label></br>
							<input class="form-control" name="address" type="text" value = "<?php echo $row["address"];?>" placeholder = "Enter your Address...">
						</div>
						
						</br></br>
						<div class="col-md-11 baner-top ban-mar">
							<label>Password: </label>
							</br>
							<input class="form-control" name="password" type="text" value = "<?php echo $row["password"];?>" placeholder = "Enter your Occupation...">
						</div></br>
						<div class="col-md-11 baner-top ban-mar">
						</br></br>
							<button type="submit" class="btn btn-success" name = "btn2"><tab2></tab2>  Submit <tab2> </tab2></button>
						</div>
						</form>
					</div>
					</wow>
					<div class="clearfix"></div>
				</div>
		</div>
		
			
		</div>
	
		</div>
	<!--//footer-->
	
	<!--
	<div id="footer" width = 100%>
        <div class="container">
            <div class="row ">
                 | All Right Reserved by Syeda Sabrina				
		
            </div>
            
        </div>-->
       
    </div>
</body>
</html>